<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicamentos extends Model
{
    
    protected $fillable = [
       'id','nome','descricao','tarja','estoque'
    ];
    
}