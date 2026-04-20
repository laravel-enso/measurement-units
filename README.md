# Measurement Units

[![License](https://poser.pugx.org/laravel-enso/measurement-units/license)](LICENSE)
[![Stable](https://poser.pugx.org/laravel-enso/measurement-units/version)](https://packagist.org/packages/laravel-enso/measurement-units)
[![Downloads](https://poser.pugx.org/laravel-enso/measurement-units/downloads)](https://packagist.org/packages/laravel-enso/measurement-units)
[![PHP](https://img.shields.io/badge/php-8.2%2B-777bb4.svg)](composer.json)
[![Issues](https://img.shields.io/github/issues/laravel-enso/measurement-units.svg)](https://github.com/laravel-enso/measurement-units/issues)
[![Merge Requests](https://img.shields.io/github/issues-pr/laravel-enso/measurement-units.svg)](https://github.com/laravel-enso/measurement-units/pulls)

## Description

Measurement Units adds Enso administration flows for unit-of-measure records.

The package exposes CRUD, options, table init, table data, and Excel export endpoints, together with seeders and factories for bootstrapping common units.

It is intended to back product, inventory, and commercial modules that need normalized measurement units.

## Installation

Install the package:

```bash
composer require laravel-enso/measurement-units
```

Run the package migrations:

```bash
php artisan migrate
```

Optional publishes:

```bash
php artisan vendor:publish --tag=measurement-unit-factories
php artisan vendor:publish --tag=measurement-unit-seeder
```

## Features

- Measurement-unit CRUD endpoints.
- Options endpoint for select inputs.
- Table init, table data, and Excel export endpoints.
- Factories and seeders for bootstrapping unit data.

## Usage

Main route group:

- `administration.measurementUnits.*`

## API

### HTTP routes

- `GET api/administration/measurementUnits/create`
- `POST api/administration/measurementUnits`
- `GET api/administration/measurementUnits/{measurementUnit}/edit`
- `PATCH api/administration/measurementUnits/{measurementUnit}`
- `DELETE api/administration/measurementUnits/{measurementUnit}`
- `GET api/administration/measurementUnits/initTable`
- `GET api/administration/measurementUnits/tableData`
- `GET api/administration/measurementUnits/exportExcel`
- `GET api/administration/measurementUnits/options`

## Depends On

Required Enso packages:

- [`laravel-enso/core`](https://docs.laravel-enso.com/backend/core.html) [↗](https://github.com/laravel-enso/core)
- [`laravel-enso/forms`](https://docs.laravel-enso.com/backend/forms.html) [↗](https://github.com/laravel-enso/forms)
- [`laravel-enso/helpers`](https://docs.laravel-enso.com/backend/helpers.html) [↗](https://github.com/laravel-enso/helpers)
- [`laravel-enso/migrator`](https://docs.laravel-enso.com/backend/migrator.html) [↗](https://github.com/laravel-enso/migrator)
- [`laravel-enso/select`](https://docs.laravel-enso.com/backend/select.html) [↗](https://github.com/laravel-enso/select)
- [`laravel-enso/tables`](https://docs.laravel-enso.com/backend/tables.html) [↗](https://github.com/laravel-enso/tables)

## Contributions

are welcome. Pull requests are great, but issues are good too.

Thank you to all the people who already contributed to Enso!
