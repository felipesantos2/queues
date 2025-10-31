<?php

use Illuminate\Support\ViewErrorBag;

function showValidationErrors(string $field, ?ViewErrorBag $errors = null): string
{
    if (is_null($errors)) {
        return '';
    }

    return $errors->first($field);
}
