<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Aula;

class AulaController extends Controller
{
    public function mostrarFormAula(){
        return view('cad_Aula');
    }

    public function mostrarManipulaAula(){
        $registrosAula = Aula::All();
       
        return view('manipula_aula',['registrosAula' => $registrosAula]);
    }

    public function cadastroAula(Request $request){
        //verifica se existe algo na variável nomecategoria
       $registrosAula = $request->validate([
        'idcurso' => 'numeric|required',
        'tituloaula' => 'string|required',
        'urlaula' => 'string|required'
       ]);
       
       // Esta linha é que grava o registro no banco.
       Aula::create($registrosAula);

       return Redirect::route('index');

    }

    public function DeletarAula(Aula $registrosAula)
    {
        $registrosAula->delete();
        return Redirect::route('index');
    }


}
