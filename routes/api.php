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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');

});

// BRAZIL CITY
Route::apiResource('brazil-cities', 'App\Http\Controllers\BrazilCityController');

// BRAZIL STATE
Route::apiResource('brazil-states', 'App\Http\Controllers\BrazilStateController');

// CITY
Route::apiResource('cities', 'App\Http\Controllers\CityController');

// CLASSIFICATION
Route::apiResource('classifications', 'App\Http\Controllers\ClassificationController');

// CLIENTS
Route::apiResource('clients', 'App\Http\Controllers\ClientController');

// CLIENT STATUS
Route::apiResource('client-statuses', 'App\Http\Controllers\ClientStatusController');

// COMMENT
Route::apiResource('comments', 'App\Http\Controllers\CommentController');

// COUNTRY
Route::apiResource('countries', 'App\Http\Controllers\CountryController');

// MARITAL STATUS
Route::apiResource('marital-statuses', 'App\Http\Controllers\MaritalStatusController');

// OCCUPATION
Route::apiResource('occupations', 'App\Http\Controllers\OccupationController');

// ORDER STATUS
Route::apiResource('order-statuses', 'App\Http\Controllers\OrderStatusController');

// PROVIDER
Route::apiResource('providers', 'App\Http\Controllers\ProviderController');

// SEARCH
Route::get('search-clients', 'App\Http\Controllers\SearchController@searchClients')
    ->name('search.clients');
Route::get('search-orders', 'App\Http\Controllers\SearchController@searchOrders')
    ->name('search.orders');

// SERVICE ORDER
Route::apiResource('service-orders', 'App\Http\Controllers\ServiceOrderController');

// SERVICE TYPE
Route::apiResource('service-types', 'App\Http\Controllers\ServiceTypeController');

// USER TYPE
Route::apiResource('user-types', 'App\Http\Controllers\UserTypeController');

