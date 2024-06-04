<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class ListaController extends Controller
{
    public function index(){
        $json = Http::get('http://localhost:84/api/v1/listar')->json();

        return view('layouts/lista',[
            "json"=>$json
        ]);
    }
}
