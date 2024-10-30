<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(Request $request)
    {
        $produtos = "Essa é uma lista de produtos";

        return view('produtos.index') -> with('produtos', $produtos);
    }

    public function create()
    {
        return view('produtos.create');
    }
}
