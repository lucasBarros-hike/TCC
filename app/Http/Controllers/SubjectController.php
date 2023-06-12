<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function mostrarMaterias(Request $request){
        $subjects = Subject::orderBy('id')->get();
        return view('subjects.subjects', ['subjects' => $subjects]);
    }
}
