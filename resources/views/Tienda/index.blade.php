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
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>
                <a name="" id="" class="btn btn-primary" href="#" role="button">Actualizar</a>
                <a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a>
            </td>

        </tr>

    </tbody>
</table>


@endsection