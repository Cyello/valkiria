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
}
?>
