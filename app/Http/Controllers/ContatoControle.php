<?php

namespace App\Http\Controllers;
use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoControle extends Controller
{
    public function index(Request $req) 
    {
       $dados=$req->all();    
       Contato::create($dados);

    }

}
