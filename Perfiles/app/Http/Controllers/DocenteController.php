<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index(){
        //$users=User::all();
        return view('docentes/registrarDocente',compact('docente'));
    }
}
