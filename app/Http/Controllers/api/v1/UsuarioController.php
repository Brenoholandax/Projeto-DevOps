<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Usuario;

class UsuarioController extends Controller
{
    private $usuarios = array();

    public function __construct(){
        //Session::put('usuarios',[0=>["nome"=>"Judas","idade"=>23,"sexo"=>'M']]);
        $this->usuarios += [0=>["nome"=>"Judas","idade"=>23,"sexo"=>'M']];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Usuario::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            "nome"=>"required",
            "idade"=>"required",
            "sexo"=>"required | max:1"
        ]);


        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $created = Usuario::create($validator->validated());

        if(!$created){
            return response()->json([
                "erro"=>"Usuário não cadastrado",
                "sucesso"=>""
            ]);
        }
         return response()->json([
            "erro"=>"",
            "sucesso"=>"Usuário cadastrado"
         ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
