<?php

namespace App\Http\Controllers;

use App\Atleta;
use Illuminate\Http\Request;

class AtletaController extends Controller
{
    public function pesquisar(){
    $atletas = Atleta::all();
    foreach ($atletas as $atleta){
        echo $atleta->nome."<br>";
    }
    }
}
