<?php
namespace App\Http\Controllers;

use App\Item;

class ItemController extends Controller
{
    public function listar() {
        $itens = Item::all();
        return view("item.listar",["itens" => $itens]);
    }
}
 ?>
