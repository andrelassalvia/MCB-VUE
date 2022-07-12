<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// BRAZIL CITY
Route::apiResource('brazil-cities', 'App\Http\Controllers\BrazilCityController')->middleware(['auth']);

// BRAZIL STATE
Route::apiResource('brazil-states', 'App\Http\Controllers\BrazilStateController')->middleware(['auth']);

// CITY
Route::apiResource('cities', 'App\Http\Controllers\CityController')->middleware(['auth']);

// CLASSIFICATION
Route::apiResource('classifications', 'App\Http\Controllers\ClassificationController')->middleware(['auth']);

// CLIENTS
Route::apiResource('clients', 'App\Http\Controllers\ClientController')->middleware(['auth']);

// CLIENT STATUS
Route::apiResource('client-statuses', 'App\Http\Controllers\ClientStatusController')->middleware(['auth']);

// COMMENT
Route::apiResource('comments', 'App\Http\Controllers\CommentController')->middleware(['auth']);

// COUNTRY
Route::apiResource('countries', 'App\Http\Controllers\CountryController')->middleware(['auth']);

// MARITAL STATUS
Route::apiResource('marital-statuses', 'App\Http\Controllers\MaritalStatusController')->middleware(['auth']);

// OCCUPATION
Route::apiResource('occupations', 'App\Http\Controllers\OccupationController')->middleware(['auth']);

// ORDER STATUS
Route::apiResource('order-statuses', 'App\Http\Controllers\OrderStatusController')->middleware(['auth']);

// PROVIDER
Route::apiResource('providers', 'App\Http\Controllers\ProviderController')->middleware(['auth']);

// SERVICE ORDER
Route::apiResource('service-orders', 'App\Http\Controllers\ServiceOrderController')->middleware(['auth']);

// SERVICE TYPE
Route::apiResource('service-types', 'App\Http\Controllers\ServiceTypeController')->middleware(['auth']);

// USER TYPE
Route::apiResource('user-types', 'App\Http\Controllers\UserTypeController')->middleware(['auth']);

