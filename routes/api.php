<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\OrgaController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;


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

//Public routes
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::get('/orgas', [OrgaController::class, 'index']);
Route::get('/orgas/{id}', [OrgaController::class, 'show']);
Route::post('/registrations', [RegistrationController::class, 'store']);

//Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::put('/users/{id}', [UserController::class, 'update']);

    Route::post('/events', [EventController::class, 'store']);
    Route::put('/events/{id}', [EventController::class, 'update']);
    Route::delete('/events/{id}', [EventController::class, 'destroy']);

    Route::post('/orgas', [OrgaController::class, 'store']);
    Route::put('/orgas/{id}', [OrgaController::class, 'update']);
    Route::delete('/orgas/{id}', [OrgaController::class, 'destroy']);

    Route::get('/orgaEventList', [EventController::class, 'showOrgaEventList']);
    Route::get('/registrations/{id}', [RegistrationController::class, 'getRegistrations']);
    });

    Route::get('/sendmail', [MailController::class, 'sendEmail']);
    