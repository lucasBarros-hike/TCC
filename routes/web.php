<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/cadastro',[Pages::class, 'showSignUp']);
Route::get('/login',[Pages::class, 'showLogin']);

Route::group(['prefix' => 'materias'], function () {
    Route::get('/',[Pages::class, 'showSubjects']);
    Route::get('/pweb',[Pages::class, 'showSubjectPweb']);
});

Route::group(['prefix' => 'forum'], function () {
    Route::get('/',[Pages::class, 'showForum']);
    Route::get('/pergunta',[Pages::class, 'showForumQuestion']);
});