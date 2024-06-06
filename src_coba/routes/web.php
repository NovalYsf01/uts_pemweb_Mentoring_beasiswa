<?php

use App\Http\Controllers\GuruController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/', [GuruController::class, 'index']);



