<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pacientes extends Model
{
    
    protected $fillable = [
        'id','cpf', 'cns', 'nome', 'nascimento','sexo','endereco','telefone'
    ];
    
}
