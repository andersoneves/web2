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
}
