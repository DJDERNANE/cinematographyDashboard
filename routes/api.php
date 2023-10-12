<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\getallfilms;
use App\Http\Controllers\API\actorsController;
use App\Http\Controllers\API\SearchController;
use App\Http\Controllers\API\NewsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/allfilms', [getallfilms::class, 'index']);
Route::get('/bestfilms', [getallfilms::class, 'bestfilms']);
Route::get('/allactors', [actorsController::class, 'index']);
Route::get('/bestactors', [actorsController::class, 'bestactors']);
Route::post('/filterfilms', [getallfilms::class, 'getfilmbycat']);
Route::post('/search', [SearchController::class, 'index']);
Route::get('/news', [NewsController::class, 'index']);
