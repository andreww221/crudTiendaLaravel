<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productosController extends Controller
{

    public function index()
    {

        $page = "index";


        return view('Tienda.index', ["page" => $page]);
    }


    public function create()
    {

        $page  = "create";


        return view('Tienda.create', ["page" => $page]);
    }


    public function store()
    {


        return "creado p";
    }
}
