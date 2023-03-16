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

Route::get('/materias',[Pages::class, 'showSubjects']);
Route::get('/materias/pweb',[Pages::class, 'showSubjectPweb']);

Route::get('/forum',[Pages::class, 'showForum']);
Route::get('/forum/pergunta',[Pages::class, 'showForumQuestion']);

