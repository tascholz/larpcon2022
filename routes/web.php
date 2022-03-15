<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\OrgaController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MailController;

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/{any?}', function () {
     return view('welcome');
 })->where('any', '^(?!api\/)[\/\w\.-]*');


// Route::get('/', function () {
//     return view('welcome');
// });


//Public routes
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::get('/orgas', [OrgaController::class, 'index']);
Route::get('/orgas/{id}', [OrgaController::class, 'show']);

//Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/events', [EventController::class, 'store']);
    Route::put('/events/{id}', [EventController::class, 'update']);
    Route::delete('/events/{id}', [EventController::class, 'destroy']);

    Route::post('/orgas', [OrgaController::class, 'store']);
    Route::put('/orgas/{id}', [OrgaController::class, 'update']);
    Route::delete('/orgas/{id}', [OrgaController::class, 'destroy']);

    Route::get('/showImage/{id}', [EventController::class, 'showImage']);
    Route::post('/saveImage', [EventController::class, 'saveImage']); 

    Route::get('/orgaEventList', function (Request $request) {
        return "Test";
        return auth()->user()->orga->events;
    });
    });

   