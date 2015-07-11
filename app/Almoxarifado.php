<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Almoxarifado extends Model
{
    //
    protected $fillable = array(
        'nome','responsavel','identificador'
    );

    public function itens(){
        return $this->hasMany("App\Item", "almoxarifado_id");
    }
}
