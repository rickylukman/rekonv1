<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RefundController;

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
    return view('home');
});

Route::get('/refund', [RefundController::class, 'index'])->name('refundindex');
Route::post('/insertrefund', [RefundController::class, 'insertrefund'])->name('insertrefund');
Route::get('/showdatarefund/{id}', [RefundController::class, 'showdata'])->name('showdata');
Route::post('/updatedatarefund/{id}', [RefundController::class, 'updatedata'])->name('updatedata');
