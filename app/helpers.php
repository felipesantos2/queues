<?php

use Illuminate\Support\ViewErrorBag;

if(! function_exists('showValidationErrors')) {
    function showValidationErrors(string $field, ?ViewErrorBag $errors = null): string
    {
        if (is_null($errors)) {
            return '';
        }

        return '<span class="error">' . $errors->first($field) . '</span>';
    }
}

if(! function_exists('showLoginError')) {
    function showLoginError(): string
    {
        return '<span class="error">' . session()->get('login_error') . '</span>';
    }
}
