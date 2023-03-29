<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\Api\PageController;
use App\Http\Controllers\Api\PostController;



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

// Quando un utente accede a questa URL, Laravel chiamerà il metodo "test" del controller "PageController" per gestire la richiesta e restituire la risposta.
// Route::get('/test', [PageController::class, 'test']);

Route::name('api.')->group(function () {
    Route::get('/test', [PageController::class, 'test']);

    Route::resource('posts', PostController::class)->only([
        'index', 'show'
    ]);
});

