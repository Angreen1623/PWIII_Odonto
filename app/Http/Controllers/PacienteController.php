<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    //select padrao
    public function index(Request $req){
        $paciente = Paciente::all();
        return view('form')->with("paciente", $paciente);
    }

    public function listar(Request $req){
        $paciente = Paciente::all();
        return view('list')->with("paciente", $paciente);
    }

    public function adicionar(Request $req){
        $paciente = new Paciente;
        $paciente = $req->nome;
        $paciente->telefone = $req->telefone;
        $paciente->origem = $req->origem;
        $paciente->data_paciente = $req->data_paciente;
        $paciente->observacao = $req->observacao;
        $paciente->save();
        return redirect()->back();
    }

    //select * from where....
    public function editar(Request $req){
        $paciente = Paciente::find($req->id);
        return view('editar')->with("paciente", $paciente);
    }

    public function atualizar(Request $req){
        $paciente = Paciente::find($req->id);
        $paciente->update(
        [
            "nome" => $req->nome,
            "telefone" => $req->telefone,
            "origem" => $req->origem,
            "data_paciente" => $req->data_paciente,
            "observacao" => $req->observacao
        ]    
        );
        return redirect()->back();
    }

    public function excluir(Request $req){
        $paciente = Paciente::find($req->id);
        $paciente->delete();
        return redirect()->back();
    }
}