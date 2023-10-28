<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function mostrarFormCurso(){
        return view('cad_curso');
    }

    public function mostrarManipulaCurso(){
        $registrosCurso = Curso::All();
       
        return view('manipula_curso',['registrosCurso' => $registrosCurso]);
    }


    public function cadastroCurso(Request $request){
        //verifica se existe algo na variável nomecategoria
        
       $registrosCurso = $request->validate([
        'nomecurso' => 'string|required',
        'cargahoraria' => 'string|required', 
        'idcategoria' => 'numeric|required',
        'valor' => 'numeric|required'
       ]);
       //dd($registrosCurso);
       // Esta linha é que grava o registro no banco.
       Curso::create($registrosCurso);

       return Redirect::route('index');

    }

    public function DeletarCurso(Curso $resgistrosCurso)
    {
        $resgistrosCurso->delete();
        return Redirect::route('index');
    }
}
