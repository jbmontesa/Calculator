<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calculadora extends Model
{
    protected $fillable = [
        'user_id', 'valor1', 'valor2', 'operacion', 'resultado',
    ];
}
