<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function pesquisar(Request $request){
        $filter = $request->input('filter');
        $pesquisa = $request->input('search');
        if($filter == 'usuarios'){
            $results = DB::table('users')->where('name', 'LIKE', '%'.$pesquisa.'%')->get();
            return view('pesquisa', ['search' => $pesquisa, 'results' => $results, 'filter' => $filter]);
        }

        else if($filter == 'materias'){
            $results = DB::table('subjects')->where('subject', 'LIKE', '%'.$pesquisa.'%')->get();
            return view('pesquisa', ['search' => $pesquisa, 'results' => $results, 'filter' => $filter]);
        }

        else if($filter == 'perguntasForum'){
            $results = DB::table('forum_posts')
                ->where('question', 'LIKE', '%'.$pesquisa.'%')
                ->orderBy('created_at', 'desc')
                ->get();
            return view('pesquisa', ['search' => $pesquisa, 'results' => $results, 'filter' => $filter]);
        }

        else if($filter == 'respostasForum'){
            $results = DB::table('forum_answers')
                ->where('answer', 'LIKE', '%'.$pesquisa.'%')
                ->orderBy('created_at', 'desc')
                ->get();
            return view('pesquisa', ['search' => $pesquisa, 'results' => $results, 'filter' => $filter]);
        }
    }
}
