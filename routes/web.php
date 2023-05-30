<?php

use App\Http\Controllers\ChatPostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatPostController;
use App\Http\Controllers\ForumPostController;
use App\Http\Controllers\ForumAnswerController;
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
    $posts = App\Models\ForumPost::orderByDesc('created_at')
                ->with('user')
                ->get();

    return view('home', ['posts' => $posts]);
})->name('home');

//LOGIN E CADASTRO
Route::get('/login', [AuthController::class, 'mostrarLogin'])->name('viewLogin');
Route::post('/login', [AuthController::class, 'realizarLogin'])->name('realizarLogin'); 
Route::get('/logout', [AuthController::class, 'realizarLogout'])->name('realizarLogout'); 
Route::get('/cadastro', [AuthController::class, 'mostrarCadastro'])->name('viewCadastro');
Route::post('/cadastro', [AuthController::class, 'realizarCadastro'])->name('realizarCadastro'); 

//CHAT E MATERIAS
Route::group(['prefix' => 'materias'], function () {
    Route::get('/', [ChatPostController::class, 'mostrarMaterias'])->name('viewMaterias');
    Route::get('/{subject}', [ChatPostController::class, 'mostrarChat'])->name('viewChat');
    Route::post('/publicar', [ChatPostController::class, 'publicarMensagem'])->name('publicarMensagem')->middleware('auth');

    Route::get('/editar/{post}',  [ChatPostController::class, 'editarMensagem'])->name('editarMensagem');
    Route::post('/editar/{post}',  [ChatPostController::class, 'alterarMensagem'])->name('alterarMensagem');
    
    Route::delete('/apagar/{post}', [ChatPostController::class, 'excluirMensagem'])->name('excluirMensagem');
});

//FORUM
Route::group(['prefix' => 'forum'], function () {
    //PERGUNTAS
    Route::get('/', [ForumPostController::class, 'mostrarForum'])->name('viewForum');
    Route::post('/', [ForumPostController::class, 'publicarPergunta'])->name('publicarPergunta')->middleware('auth');

    Route::get('/editar/{post}',  [ForumPostController::class, 'editarPergunta'])->name('editarPergunta');
    Route::post('/editar/{post}',  [ForumPostController::class, 'alterarPergunta'])->name('alterarPergunta');
    
    Route::delete('/apagar/{post}', [ForumPostController::class, 'excluirPergunta'])->name('excluirPergunta');

    //RESPOSTAS
    Route::get('/respostas', [ForumAnswerController::class, 'mostrarRespostasForum'])->name('viewForumAnswers');
});

Route::get('/atividade', function () {return View('atividade');})->name('viewAtividade');
Route::get('/sobre', function () {return View('sobre');})->name('viewSobre');
Route::get('/contate-nos', function () {return View('contate-nos');})->name('viewContate-nos');
Route::get('/perfil', function (){return View('perfil');})->name('viewPerfil');
