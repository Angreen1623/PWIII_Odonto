<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable=[
    
        "nome_pac",
        "dt_nasc",
        "nome_med",
        "tipo_consulta",
        "data",
        "hora",
        "observacao"

    ];
}
