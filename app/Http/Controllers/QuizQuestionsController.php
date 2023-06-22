<?php

namespace App\Http\Controllers;

use App\Models\QuizActivities;
use App\Models\QuizQuestions;
use Illuminate\Http\Request;

class QuizQuestionsController extends Controller
{
    public function mostrarQuiz()
    {
        return view('atividades.quiz');
    }
}
