<?php

use App\Http\Controllers\ChatPostsController;
use App\Http\Controllers\SavedFilesController;
use App\Models\Likes;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ChatPostController;
use App\Http\Controllers\ForumPostController;
use App\Http\Controllers\ForumAnswerController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\ProfileController;
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

    $subjects = App\Models\Subject::orderBy('created_at')->get();

    return view('home', ['posts' => $posts, 'subjects' => $subjects]);
})->name('home');

Route::post('/', [SearchController::class, 'pesquisar'])->name('pesquisar');

//LOGIN E CADASTRO
Route::get('/login', [AuthController::class, 'mostrarLogin'])->name('viewLogin');
Route::post('/login', [AuthController::class, 'realizarLogin'])->name('realizarLogin'); 
Route::get('/logout', [AuthController::class, 'realizarLogout'])->name('realizarLogout'); 
Route::get('/cadastro', [AuthController::class, 'mostrarCadastro'])->name('viewCadastro');
Route::post('/cadastro', [AuthController::class, 'realizarCadastro'])->name('realizarCadastro'); 

//CHAT E MATERIAS
Route::group(['prefix' => 'materias'], function () {
    Route::get('/', [SubjectController::class, 'mostrarMaterias'])->name('viewMaterias');
    Route::get('/{subject_id}', [ChatPostController::class, 'mostrarChat'])->name('viewChat');
    Route::post('/{subject_id}', [ChatPostController::class, 'publicarMensagem'])->name('publicarMensagem')->middleware('auth');

    Route::get('/editar/{post}',  [ChatPostController::class, 'editarMensagem'])->name('editarMensagem');
    Route::post('/editar/{post}',  [ChatPostController::class, 'alterarMensagem'])->name('alterarMensagem');
    
    Route::delete('/apagar/{post}', [ChatPostController::class, 'excluirMensagem'])->name('excluirMensagem');

    Route::post('/{subject_id}/salvar/{file_id}', [SavedFilesController::class, 'salvarArquivo'])->name('salvarArquivo')->middleware(('auth'));
    Route::post('/{subject_id}/remover/{file_id}/{user_id}', [SavedFilesController::class, 'removerArquivo'])->name('removerArquivo')->middleware(('auth'));
});

//FORUM
Route::group(['prefix' => 'forum'], function () {
    //PERGUNTAS
    Route::get('/', [ForumPostController::class, 'mostrarForum'])->name('viewForum');
    Route::post('/', [ForumPostController::class, 'publicarPergunta'])->name('publicarPergunta')->middleware('auth');

    Route::put('/{post_id}/editar',  [ForumPostController::class, 'editarPergunta'])->name('editarPergunta')->middleware('auth');
    
    Route::delete('/apagar/{post}', [ForumPostController::class, 'excluirPergunta'])->name('excluirPergunta')->middleware('auth');

    //RESPOSTAS
    Route::get('/{post_id}', [ForumAnswerController::class, 'mostrarRespostasForum'])->name('viewForumAnswers');
    Route::post('/{post_id}', [ForumAnswerController::class, 'publicarResposta'])->name('publicarResposta')->middleware('auth');
    
    Route::put('/{post_id}/editar/{answer}',[ForumAnswerController::class, 'editarResposta'])->name('editarResposta')->middleware('auth');

    Route::delete('/{post_id}/excluir/{answer}', [ForumAnswerController::class, 'excluirResposta'])->name('excluirResposta')->middleware('auth');

    Route::post('/{post_id}/curtir/{answer_id}', [LikesController::class, 'curtirResposta'])->name('curtirResposta')->middleware('auth');
    Route::post('/{post_id}/descurtir/{answer_id}/{user_id}', [LikesController::class, 'descurtirResposta'])->name('descurtirResposta')->middleware('auth');
});

Route::get('/atividade', function () {return View('atividade');})->name('viewAtividade');
Route::get('/sobre', function () {return View('sobre');})->name('viewSobre');
Route::get('/contate-nos', function () {return View('contate-nos');})->name('viewContate-nos');

Route::group(['prefix' => 'perfil'], function () {
    //PERFIL
    Route::get('/{profile}', [ProfileController::class, 'mostrarPerfil'])->name('viewProfile');
    Route::put('/{profile}', [ProfileController::class, 'mudarFotoPerfil'])->name('mudarFotoPerfil')->middleware('auth');
});

Route::fallback(function () {
    $posts = App\Models\ForumPost::orderByDesc('created_at')
                ->with('user')
                ->get();

    $subjects = App\Models\Subject::orderBy('created_at')->get();

    return view('home', ['posts' => $posts, 'subjects' => $subjects]);
});