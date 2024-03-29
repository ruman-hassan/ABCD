<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MpesaController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/topic-detail', function () {
    return view('topic-detail');
});
Route::get('/payment', [MpesaController::class,'index']);
    Route::post('/payment',[MpesaController::class, 'mpesaSTKPush']);
