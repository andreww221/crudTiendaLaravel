@extends('Tienda.base')



@section('contentMain')

<h3 class="my-5">Productos</h3>


<a name="" id="" class="btn btn-secondary my-4" href="{{ route('producto.create') }}" role="button">Crear Producto</a>





<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre </th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio Unidad</th>
            <th>Acciones </th>




        </tr>
    </thead>
    <tbody>

        @foreach($products as $product)


        <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->nombre }}</td>
            <td>{{ $product->descripcion }}</td>
            <td>{{$product->precio_unidad }}</td>
            <td>
                <a name="" id="" class="btn btn-primary" href="#" role="button">Actualizar</a>
                <a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a>
            </td>

        </tr>




        @endforeach






    </tbody>
</table>


@endsection