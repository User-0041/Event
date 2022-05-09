<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventCRUDController;
use App\Http\Controllers\ListEtudController;
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

Route::resource('events', EventCRUDController::class);

Route::get('list_etudiants', [ListEtudController::class, 'show'])->name('ListEtudiant.index');
Route::resource('participants', ParticipantController::class);



Route::get('/', function () {
    return view('welcome');
}


);
