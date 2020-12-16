<?php

namespace XLaravel\ValidationTrTaxNumberExtend\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Validator;

class ValidationTrTaxNumberExtendServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'X-Laravel');

        Validator::extend('tr_tax_number', 'XLaravel\ValidationTrTaxNumberExtend\Rules\TrTaxNumberRule@passes');
    }
}
