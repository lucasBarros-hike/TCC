<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function pesquisar($filter, Request $request){
        $pesquisa = $request->input('search');
        if($filter == 'usuarios'){
            $results = DB::table('users')->where('name', 'LIKE', '%'.$pesquisa.'%')->get();
            return view('pesquisa', ['search' => $pesquisa, 'results' => $results, 'filter' => $filter]);
        }

        else if($filter == 'materias'){
            $results = DB::table('subjects')->where('subject', 'LIKE', '%'.$pesquisa.'%')->get();
            return view('pesquisa', ['search' => $pesquisa, 'results' => $results, 'filter' => $filter]);
        }

        else if($filter == 'forum'){
            $results = DB::table('forum_posts')->where('question', 'LIKE', '%'.$pesquisa.'%')->get();
            return view('pesquisa', ['search' => $pesquisa, 'results' => $results, 'filter' => $filter]);
        }
    }
}
