<?php

namespace App\Helpers;

use Illuminate\Support\ViewErrorBag;

class Helpers
{
    public static function showValidationErrors(string $field, ?ViewErrorBag $errors = null): string
    {
        if (is_null($errors)) {
            return '';
        }

        return '<span class="text-sm text-red-500">' . $errors->first($field) . '</span>';
    }
}
