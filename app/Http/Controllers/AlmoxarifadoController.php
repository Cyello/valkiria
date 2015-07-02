<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Almoxarifado;
use Request;

class AlmoxarifadoController extends Controller
{
    public function lista()
    {
      $almoxarifados = Almoxarifado::all();
      return view('almoxarifado.lista', ['almoxarifados' => $almoxarifados]);
    }

    // Irá retornar valores em formato JSON
    public function exibir( $id )
    {
        if( Almoxarifado::find( $id ) )
        {
            return Almoxarifado::find( $id );
        }
    }

    public function cadastrar()
    {
        Almoxarifado::create( Request::all() );
        return redirect( action('AlmoxarifadoController@lista') )
                ->withInput( Request::only('nome'));
    }
}
?>
