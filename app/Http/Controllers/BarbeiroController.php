<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarbeiroController extends Controller
{
    public function index(){
        return view('barbeiro.index');
    }

    public function cadastrarHorario(){

        $mensagemSucesso = session('mensagem.sucesso');

        return view('barbeiro.cadastro-horarios')->with('mensagemSucesso', $mensagemSucesso);
    }
}
