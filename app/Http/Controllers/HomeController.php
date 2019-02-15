<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\eventos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller
{
    //
    public function index()
    {
      $eventos = eventos::all();
      //dd($eventos);
      return view('home',compact('eventos'));
    }
   
}
