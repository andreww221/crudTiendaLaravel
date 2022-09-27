<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class productosController extends Controller
{

    public function index()
    {

        $page = "index";

        $products = Product::all();


        return view('Tienda.index', ["page" => $page, "products" => $products]);
    }


    public function create()
    {

        $page  = "create";


        return view('Tienda.create', ["page" => $page]);
    }




    public function store()
    {
    }
}
