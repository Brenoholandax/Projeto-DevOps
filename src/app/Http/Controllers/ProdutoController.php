<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function listar(){
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    public function cadastrarProduto(Request $request){

        $nome = $request->input('nome');
        $preco = $request->input('preco');
        $descricao = $request->input('descricao');

        $produto = new Produto();
        $produto->nome = $nome;
        $produto->preco = $preco;
        $produto->descricao = $descricao;
        $produto->save();

        return response()->json("produto cadastrado com sucesso");

    }


    // public function listar(){
    //     $produto = array();
    //     $produto[0]["nome"]= "mouse";
    //     $produto[0]["preco"]= 100;
    //     $produto[0]["descricao"]= "mouse sem fio";

    //     $produto[1]["nome"]= "teclado";
    //     $produto[1]["preco"]= 200;
    //     $produto[1]["descricao"]= "teclado sem fio";

    //     $produto[2]["nome"]= "monitor";
    //     $produto[2]["preco"]= 500;
    //     $produto[2]["descricao"]= "monitor 21 polegadas";

    //     return response()->json($produto);

    // }
}
