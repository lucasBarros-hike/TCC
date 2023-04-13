<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {return view('home');});

// Route::get('/cadastro',[Pages::class, 'showSignUp']);
Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login.login');

Route::group(['prefix' => 'materias'], function () {
    Route::get('/', function () {return View('subjects.subjects');})->name('subjects');

    Route::get('/Chat', function() {return View('subjects.subjectsChat');})->name('subjectsChat');
});

Route::group(['prefix' => 'forum'], function () {
    Route::get('/', function() {return View('forum.forum');});

    Route::get('/pergunta', function() {return View('forum.forumQuestion');});
});

Route::resource('cadastro', CadastroController::class);
