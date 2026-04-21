<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use LaravelEnso\DataImport\Models\Import;
use LaravelEnso\Forms\TestTraits\CreateForm;
use LaravelEnso\Forms\TestTraits\DestroyForm;
use LaravelEnso\Forms\TestTraits\EditForm;
use LaravelEnso\Helpers\Services\Obj;
use LaravelEnso\MeasurementUnits\Imports\Importers\MeasurementUnits as Importer;
use LaravelEnso\MeasurementUnits\Models\MeasurementUnit;
use LaravelEnso\Tables\Traits\Tests\Datatable;
use LaravelEnso\Users\Models\User;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class MeasurementUnitsTest extends TestCase
{
    use Datatable, DestroyForm, EditForm, CreateForm, RefreshDatabase;

    private $permissionGroup = 'administration.measurementUnits';
    private $testModel;

    protected function setUp(): void
    {
        parent::setUp();

        $this->seed()
            ->actingAs(User::first());

        $this->testModel = MeasurementUnit::factory()->make();
    }

    #[Test]
    public function can_store_service()
    {
        $response = $this->post(
            route('administration.measurementUnits.store', [], false),
            $this->testModel->toArray()
        );

        $service = MeasurementUnit::whereName($this->testModel->name)
            ->first();

        $response->assertStatus(200)
            ->assertJsonStructure(['message'])
            ->assertJsonFragment([
                'redirect' => 'administration.measurementUnits.edit',
                'param'    => ['measurementUnit' => $service->id],
            ]);
    }

    #[Test]
    public function can_update_service()
    {
        tap($this->testModel)->save()->name = 'updated';

        $this->patch(
            route('administration.measurementUnits.update', $this->testModel->id, false),
            $this->testModel->toArray()
        )->assertStatus(200)
            ->assertJsonStructure(['message']);

        $this->assertEquals(
            $this->testModel->name,
            $this->testModel->fresh()->name
        );
    }

    #[Test]
    public function get_option_list()
    {
        $this->testModel->save();

        $this->get(route('administration.measurementUnits.options', [
            'query' => $this->testModel->name,
            'limit' => 10,
        ], false))
            ->assertStatus(200)
            ->assertJsonFragment(['name' => $this->testModel->name]);
    }

    #[Test]
    public function validates_required_name_on_store()
    {
        $this->post(route('administration.measurementUnits.store', [], false), [
            'name' => null,
            'description' => $this->testModel->description,
        ])->assertStatus(302)
            ->assertSessionHasErrors(['name']);
    }

    #[Test]
    public function validates_unique_name_on_store()
    {
        $this->testModel->save();

        $this->post(route('administration.measurementUnits.store', [], false), [
            'name' => $this->testModel->name,
            'description' => 'Duplicate',
        ])->assertStatus(302)
            ->assertSessionHasErrors(['name']);
    }

    #[Test]
    public function can_import_measurement_unit()
    {
        (new Importer())->run(new Obj([
            'name' => 'Imported Unit',
            'description' => 'Imported description',
        ]), \Mockery::mock(Import::class));

        $this->assertDatabaseHas('measurement_units', [
            'name' => 'Imported Unit',
            'description' => 'Imported description',
        ]);
    }
}
