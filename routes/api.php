<?php


use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\IndexController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your Application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');

    Route::group(['middleware'=> 'jwt.auth'], function (){
        Route::get('/get-table', [ApplicationController::class, 'index']);
    });


});
Route::get('/get-table', [ApplicationController::class, 'index']);
Route::post('/register', IndexController::class);
Route::post('/head/create', [ApplicationController::class, 'createHeadOfDep'])->name('head.create');
Route::post('/head/delete', [ApplicationController::class, 'deleteHeadOfDep'])->name('head.delete');
Route::post('/head/update', [ApplicationController::class, 'updateHeadOfDep'])->name('head.update');
