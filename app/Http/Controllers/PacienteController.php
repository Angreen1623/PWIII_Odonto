<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Paciente;

class PacienteController extends Controller
{
    //select padrao
    public function listar(Request $req){
        $paciente = Paciente::all();
        return view('listar')->with("paciente", $paciente);
    }

    public function adicionar(Request $req){

        $validator = Validator::make($req->all(), [
            'nome_pac' => 'required|string|max:100',
            'dt_nasc' => 'required|date|before:today',
            'nome_med' => 'required|string|max:100',
            'tipo_consulta' => 'required|string|max:8',
            'data' => 'required|date|after:today',
            'hora' => 'required',
            'observacao' => 'required|string|max:255'
        ], [
            'nome_pac.required' => 'O campo nome do paciente é obrigatório.',
            'dt_nasc.required' => 'O campo data de nascimento é obrigatório.',
            'nome_med.required' => 'O campo nome do médico é obrigatório.',
            'tipo_consulta.required' => 'O campo tipo da consulta é obrigatório.',
            'data.required' => 'O campo data da consulta é obrigatório.',
            'hora.required' => 'O campo horário da consulta é obrigatório.',
            'observacao.required' => 'O campo observação é obrigatório.',

            'nome_pac.string' => 'O campo nome do paciente deve conter apenas texto.',
            'dt_nasc.date' => 'O campo data de nascimento deve conter uma data válida.',
            'nome_med.string' => 'O campo nome do médico deve conter apenas texto.',
            'tipo_consulta.string' => 'O campo tipo da consulta deve conter apenas texto.',
            'data.date' => 'O campo data da consulta deve conter uma data válida.',
            'observacao.string' => 'O campo observação deve conter apenas texto.',

            'nome_pac.max' => 'O campo nome do paciente deve conter no máximo 100 caracteres.',
            'dt_nasc.before' => 'O campo data de nascimento deve conter uma data válida.',
            'nome_med.max' => 'O campo nome do médico deve no máximo 100 caracteres.',
            'tipo_consulta.max' => 'O campo tipo da consulta deve conter no máximo 8 caracteres.',
            'data.after' => 'O campo data da consulta deve conter uma data válida.',
            'observacao.max' => 'O campo observação deve conter no máximo 255 caracteres.',

        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

        $paciente = new Paciente;
        $paciente->nome_pac = $req->nome_pac;
        $paciente->dt_nasc =  $req->dt_nasc;
        $paciente->nome_med = $req->nome_med;
        $paciente->tipo_consulta = $req->tipo_consulta;
        $paciente->data = $req->data;
        $paciente->hora = $req->hora;
        $paciente->observacao = $req->observacao;
        $paciente->save();
        return redirect()->back()->with("sucess", $sucess = 1);
    }

    //select * from where....
    public function editar(Request $req){
        $paciente = Paciente::find($req->id);
        return view('Atualizar')->with("paciente", $paciente);
    }

    public function atualizar(Request $req){
        
        $validator = Validator::make($req->all(), [
            'nome_pac' => 'required|string|max:100',
            'dt_nasc' => 'required|date|before:today',
            'nome_med' => 'required|string|max:100',
            'tipo_consulta' => 'required|string|max:8',
            'data' => 'required|date|after:today',
            'hora' => 'required',
            'observacao' => 'required|string|max:255'
        ], [
            'nome_pac.required' => 'O campo nome do paciente é obrigatório.',
            'dt_nasc.required' => 'O campo data de nascimento é obrigatório.',
            'nome_med.required' => 'O campo nome do médico é obrigatório.',
            'tipo_consulta.required' => 'O campo tipo da consulta é obrigatório.',
            'data.required' => 'O campo data da consulta é obrigatório.',
            'hora.required' => 'O campo horário da consulta é obrigatório.',
            'observacao.required' => 'O campo observação é obrigatório.',

            'nome_pac.string' => 'O campo nome do paciente deve conter apenas texto.',
            'dt_nasc.date' => 'O campo data de nascimento deve conter uma data válida.',
            'nome_med.string' => 'O campo nome do médico deve conter apenas texto.',
            'tipo_consulta.string' => 'O campo tipo da consulta deve conter apenas texto.',
            'data.date' => 'O campo data da consulta deve conter uma data válida.',
            'observacao.string' => 'O campo observação deve conter apenas texto.',

            'nome_pac.max' => 'O campo nome do paciente deve conter no máximo 100 caracteres.',
            'dt_nasc.before' => 'O campo data de nascimento deve conter uma data válida.',
            'nome_med.max' => 'O campo nome do médico deve no máximo 100 caracteres.',
            'tipo_consulta.max' => 'O campo tipo da consulta deve conter no máximo 8 caracteres.',
            'data.after' => 'O campo data da consulta deve conter uma data válida.',
            'observacao.max' => 'O campo observação deve conter no máximo 255 caracteres.',

        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

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
        //quando  voltar do editar p/ listar deve se colocar a variavel abaixo
        $paciente = Paciente::all();
        return redirect('listar')->with("paciente", $paciente);
    }

    public function excluir(Request $req){
        $paciente = Paciente::find($req->id);
        $paciente->delete();
        return redirect()->back();
    }
}