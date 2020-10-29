<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendTicketController;
use App\Http\Controllers\FrontTicketController;

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

Route::resource('backend', BackendTicketController::class);
Route::resource('frontend', FrontTicketController::class);

Route::get('/', function () 
{
    return view('welcome');
});
