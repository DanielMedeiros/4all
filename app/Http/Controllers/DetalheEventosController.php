<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\eventos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetalheEventosController extends Controller
{
    //
     public function index()
    {
      
      return view('detalheseventos');
    }

    public function listaEvento($id)
    {
        
        $evento = eventos::find($id);
       return view('detalheseventos',compact('evento'));
    }
}
