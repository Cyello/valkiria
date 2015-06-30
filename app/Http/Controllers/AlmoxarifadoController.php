<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Almoxarifado;

class AlmoxarifadoController extends Controller
{
    public function lista()
    {
      $almoxarifados = Almoxarifado::all();
      return view('almoxarifado.lista', ['almoxarifados' => $almoxarifados]);
    }

    public function cadastrar()
    {

    }

    // Irá retornar valores em formato JSON
    public function exibir( $id )
    {
        if( Almoxarifado::find( $id ) )
        {
            return Almoxarifado::find( $id );
        }
    }
}
?>
