# X-Laravel - Validation TR Tax Number Extend Package

<p align="center">
<a href="https://packagist.org/packages/X-Laravel/validation-tr-tax-number-extend" rel="nofollow"><img src="https://img.shields.io/packagist/v/X-Laravel/validation-tr-tax-number-extend" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/X-Laravel/validation-tr-tax-number-extend" rel="nofollow"><img src="https://img.shields.io/packagist/dt/X-Laravel/validation-tr-tax-number-extend" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/X-Laravel/validation-tr-tax-number-extend" rel="nofollow"><img src="https://poser.pugx.org/X-Laravel/validation-tr-tax-number-extend/dependents.svg" alt="Dependents"></a>
<a href="https://packagist.org/packages/X-Laravel/validation-tr-tax-number-extend" rel="nofollow"><img src="https://img.shields.io/packagist/l/X-Laravel/validation-tr-tax-number-extend" alt="License"></a>
</p>

<p align="center">
<a href="https://scrutinizer-ci.com/g/X-Laravel/validation-tr-tax-number-extend/build-status/master" rel="nofollow"><img src="https://scrutinizer-ci.com/g/X-Laravel/validation-tr-tax-number-extend/badges/quality-score.png?b=master" title="Scrutinizer Code Quality"></a>
<a href="https://styleci.io/repos/322126400" rel="nofollow"><img src="https://styleci.io/repos/322126400/shield?branch=master" alt="StyleCI"></a>
</p>

## Introduction

Turkey tax number validation extend package for Laravel.

## Requirements

Laravel >=5.5. Other than that, this library has no requirements.

## Install

```bash
$ composer require x-laravel/validation-tr-tax-number-extend
```

## Example Usage

```php
$this->validate($request, ['tax_number' => 'required|tr_tax_number']);
```

## License

This package is open source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
