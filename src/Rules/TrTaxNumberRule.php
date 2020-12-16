<?php

namespace XLaravel\ValidationTrTaxNumberExtend\Rules;

use Illuminate\Contracts\Validation\Rule;
use XAdam\TrTaxNumberValidation;

class TrTaxNumberRule implements Rule
{
    public function passes($attribute, $value): bool
    {
        return TrTaxNumberValidation::validate($value);
    }

    public function message(): string
    {
        return trans('X-Laravel::validationTrTaxNumberExtend.error');
    }
}
