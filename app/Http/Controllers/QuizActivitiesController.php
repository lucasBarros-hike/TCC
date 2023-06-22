<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizActivitiesController extends Controller
{
    public function mostrarAtividades(Request $request)
    {
        $activities = DB::table('quiz_activities')->get();
        return view('atividades.atividade', ['activities' => $activities]);
    }
}
