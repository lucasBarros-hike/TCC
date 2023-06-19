<?php

namespace App\Http\Controllers;

use App\Models\SavedFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SavedFilesController extends Controller
{
    public function salvarArquivo($subject_id, $file_id, Request $request)
    {
        $user_id = $request->input('user_id');
        $file = $request->input('file_id');
        if($user_id == Auth::user()->id)
        {
            if($file == $file_id){
                $dados = $request->validate([
                    'user_id' => "integer|exists:users,id",
                    'file_id' => "integer|exists:files,id",
                ]);
                SavedFiles::create($dados);

                return redirect()->back();
            }
        }
        else {return redirect('/');}
    }

    public function removerArquivo($subject_id, $file_id, $user_id)
    {
        $saved_file = SavedFiles::where('user_id', $user_id)->where('file_id', $file_id)->first();
        $saved_file->delete();
        return redirect()->back();
    }
}
