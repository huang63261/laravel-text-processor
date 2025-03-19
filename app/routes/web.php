<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TextController;

Route::get('/', function () {
    return view('welcome');
});
