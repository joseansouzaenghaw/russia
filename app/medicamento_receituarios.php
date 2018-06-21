<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicamento_receituarios extends Model
{
    
    protected $fillable = [
       'receituarios_id','medicamentos_id','id','qtd','entregue','usuario_id'
    ];
    
}
