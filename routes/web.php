<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    try {
        dd(DB::connection()->getPdo());
    } catch (Exception $e) {
        dd($e->getMessage());
    }
});
