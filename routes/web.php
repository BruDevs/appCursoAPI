<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AulaController;

Route::get('/',[CategoriaController::class,'index'])->name('index');

//rotas para visualizar e cadastrar a categoria
Route::get('/cadcategoria',[CategoriaController::class,'mostrarFormCat'])->name("form-cadastro-categoria");
Route::post('/cadcategoria',[CategoriaController::class,'cadastroCat'])->name("cadastro-categoria");

//rotas para mostrar categoria
Route::get('/manipulacategoria',[CategoriaController::class,'mostrarManipulaCategoria'])->name("manipula-categoria");

//rota para buscar o nome da categoria
Route::get('/manipulanomecategoria',[CategoriaController::class,'BuscarCategoriaNome'])->name('busca-categoria-nome');

//rotas para alterar categoria
Route::get('/alterar-categoria/{registrosCategoria}',[CategoriaController::class,'MostrarAlterarCategoria'])->name('alterar-categoria');
Route::put('/alterarbancocategoria/{registrosCategoria}',[CategoriaController::class,'AlterarBancoCategoria'])->name('alterar-banco-categoria');

// rota para deletar categoria
Route::delete('/deletarcategoria/{resgistrosCategoria}',[CategoriaController::class,'DeletarCategoria'])->name('deletar-categoria');




//rotas para visualizar e cadastrar o curso
Route::get('/cadcurso',[CursoController::class,'mostrarFormCurso'])->name("form-cadastro-curso");
Route::post('/cadcurso',[CursoController::class,'cadastroCurso'])->name("cadastro-curso");

//rota pra mostrar curso
Route::get('/manipulacurso',[CursoController::class,'mostrarManipulaCurso'])->name("manipula-curso");

//rotas para alterar curso
Route::get('/alterar-curso/{registrosCurso}',[CursoController::class,'MostrarAlterarCurso'])->name('alterar-curso');

//rota para excluir curso
Route::delete('/deletarcurso/{resgistrosCurso}',[CursoController::class,'DeletarCurso'])->name('deletar-curso');



//rotas para visualizar e cadastrar a aula
Route::get('/cadaula',[AulaController::class,'mostrarFormAula'])->name("form-cadastro-aula");
Route::post('/cadaula',[AulaController::class,'cadastroAula'])->name("cadastro-aula");

//rotas para mostrar Aula
Route::get('/manipulaaula',[AulaController::class,'mostrarManipulaAula'])->name("manipula-aula");

//rotas para alterar aula
Route::get('/alterar-aula/{registrosAula}',[AulaController::class,'MostrarAlterarAula'])->name('alterar-aula');

//rota para excluir aula
Route::delete('/deletaraula/{registrosAula}',[AulaController::class,'DeletarAula'])->name('deletar-aula');
