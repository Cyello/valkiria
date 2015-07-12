<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $table = "itens";

    public function almoxarifado(){
        return $this->belongsTo("App\Almoxarifado");
    }
}
