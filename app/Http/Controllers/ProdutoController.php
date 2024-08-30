<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\View\ListaProduto;

class ProdutoController extends Controller
{
    public function index(){
    	return view("ListaProduto",["produtos"=>Produto::orderBy('name')->get()]); 
    } 

    public function cadastro(){
    	return view("cadastro");
    }


    public function salvar(Request $request){
    	Produto::insert(["name"=>$request->get("nome"),"descricao"=>$request->get("descricao"),"preco"=>$request->get("preco")]);

        return view("ListaProduto",["produtos"=>Produto::orderBy('name')->get()])->with("mensagem",(object)["texto"=>"Dados salvos com sucesso","classe"=>"bg-success"]);

            //["mensagem"=>(object)["texto"=>"Dados salvos com sucesso","classe"=>"bg-success"]] );
        
    }
    public function editar(int $id){
        
        $produto=Produto::find($id);
        return view("editar",compact('produto'));
        
    }

    public function excluir(int $id){
        return $id;
    }
}
