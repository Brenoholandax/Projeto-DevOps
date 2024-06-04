<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class FormularioController extends Controller
{
    public function index(){
        return view('layouts/formulario');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            "nome"=>"required",
            "idade"=>"required",
            "sexo"=>"required | max:1"
        ]);

        if($validator->fails()){
            return redirect('/formulario')->with([
                "dados"=>[
                    "erro"=>$validator->errors(),
                    "sucesso"=>""
                ]
            ]);
        }else{
            $json = Http::post('http://localhost:84/api/v1/registrar',$validator->validated())->json();
            return redirect('/formulario')->with(["dados"=>$json]);
        }
    }
}
