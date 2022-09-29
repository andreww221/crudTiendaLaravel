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




    public function store(Request $request)
    {



        Product::insert([
            "nombre" => $request->input('nombre'),
            "descripcion" => $request->input('descripcion'),
            "precio_unidad" => $request->input('precio_unidad')

        ]);

        $request->session()->flash('created', 'El producto ' . $request->input('nombre') . ' Fue creado correctamente');



        return redirect()->route('producto.index');
    }




    public function delete($id)
    {


        $producto = Product::find($id);



        return view('Tienda.delete', [
            "nombre" => $producto->nombre,
            "descripcion" => $producto->descripcion,
            "precio_unidad" => $producto->precio_unidad,
            "id" => $id,
            "page" => "edit"
        ]);


    }


    public function destroy($id, Request $request)
    {

        $product = Product::find($id);

        $product->delete();


        $request->session()->flash('deleted', 'El producto ' . $product->nombre . ' fue eliminado con exito');


        return redirect()->route('producto.index');
    }


    public function edit($id)
    {


        $producto = Product::find($id);



        return view('Tienda.edit', [
            "nombre" => $producto->nombre,
            "descripcion" => $producto->descripcion,
            "precio_unidad" => $producto->precio_unidad,
            "id" => $id,
            "page" => "edit"
        ]);
    }


    public function update($id, Request $request)
    {

        $product = Product::find($id);

        $product->update([
            "nombre" => $request->input('nombre'),
            "descripcion" => $request->input('descripcion'),
            "precio_unidad" => $request->input('precio_unidad')

        ]);


        $request->session()->flash('updated', 'Producto  ' . $request->input('nombre') . '  actualizado con exito');


        return redirect()->route('producto.index');
    }
}
