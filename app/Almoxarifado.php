<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Almoxarifado extends Model
{
    //
    protected $fillable = array(
        'nome','responsavel','identificador'
    );
}
