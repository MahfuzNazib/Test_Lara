<?php

use App\Http\Controllers\TestServiceController;
use Illuminate\Support\Facades\Route;

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


Route::get('/test-service', [TestServiceController::class, 'index'])->name('test_service.index');
Route::post('/submit-test', [TestServiceController::class, 'submit_test'])->name('test_service.submit');
