<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class receituarios extends Model
{
    
    protected $fillable = [
        'id','data', 'observacao', 'pacientes_id', 'usuario_id'
    ];
    
}
