<?php

namespace App\Http\Controllers;

use App\Models\ForumPost;
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
            $results = ForumPost::orderByDesc('created_at')
                ->where('question', 'LIKE', '%'.$pesquisa.'%')
                ->with('user')
                ->get();
            return view('pesquisa', ['search' => $pesquisa, 'results' => $results, 'filter' => $filter]);
        }
    }
}
