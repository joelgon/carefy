<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use app\Http\Controllers\PatientController;
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

Route::get('/', action: 'HomeController@__invoke')->name('home');

/**********************************************************
 *                    Patient Routes                      *
 **********************************************************/
Route::get('patient', action: 'PatientController@index')->name('patients');
Route::post('insert-patients', action:'PatientController@store')->name('insert.patient');
