<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    //select padrao
    public function index(Request $req){
        $paciente = Paciente::all();
        return view('Cadastrar')->with("paciente", $paciente);
    }

    public function listar(Request $req){
        $paciente = Paciente::all();
        return view('listar')->with("paciente", $paciente);
    }

    public function adicionar(Request $req){
        $paciente = new Paciente;
        $paciente->nome_pac = $req->nome_pac;
        $paciente->dt_nasc = $req->dt_nasc;
        $paciente->nome_med = $req->nome_med;
        $paciente->tipo_consulta = $req->tipo_consulta;
        $paciente->data = $req->data;
        $paciente->hora = $req->hora;
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
            "nome_pac" => $req->nome_pac,
            "dt_nasc" => $req->dt_nasc,
            "nome_med" => $req->nome_med,
            "tipo_consulta" => $req->tipo_consulta,
            "data" => $req->data,
            "hora" => $req->hora,
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