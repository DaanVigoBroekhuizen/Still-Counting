<?php

use App\Http\Controllers\SolarsystemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/planets', [PlanetController::class, 'index']);

Route::get('/planets/{name}', [PlanetController::class, 'show']);

Route::get('/solarsystems', [SolarsystemController::class, 'index']);

Route::get('/solarsystems/{name}', [SolarsystemController::class, 'show']);
