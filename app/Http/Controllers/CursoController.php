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

    public function MostrarAlterarCurso(Curso $registrosCurso)
    {
        //$registrosCategoria = Categoria::;
        return view('altera_curso',['registrosCurso' => $registrosCurso]);
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

    public function AlterarBancoCurso(Curso $registrosCurso, Request $request)
    {

        $registrosCur = $request->validate([
            'nomecurso' => 'string|required',
            'cargahoraria' => 'string|required', 
            'valor' => 'numeric|required'
           ]);
           
           // Esta linha é que altera o registro no banco.
           $registrosCurso->fill($registrosCur);
          
           $registrosCurso->save();

        
        //alert("Dados alterados com sucesso!");
        return Redirect::route('index');
    }
}
