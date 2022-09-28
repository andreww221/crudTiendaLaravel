@extends('Tienda.base')



@section('contentMain')


@if(session('created')!=null)

<div class="alert alert-success" role="alert">

    <div class="font-weight-bold">
        {{ session('created') }}
    </div>

</div>

@endif


@if(session('deleted')!=null)

<div class="alert alert-success" role="alert">
    {{ session('deleted') }}
</div>

@endif


@if(session('updated')!=null)

<div class="alert alert-success" role="alert">
    {{ session('updated') }}
</div>

@endif













<h3 class="my-5">Productos</h3>


<a name="" id="" class="btn btn-secondary my-5" href="{{ route('producto.create') }}" role="button">Crear Producto</a>





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


                <div class="d-flex flex-row justify-content-between" >
                    <div>
                        <a name="" id="" class="btn btn-primary" href="{{ route('producto.edit',['producto'=> $product->id ])  }}" role="button">Actualizar</a>
                    </div>
                    <div>

                        <form action="{{ route('producto.destroy',['producto'=> $product->id ])  }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>

                        </form>
                    </div>
                </div>


            </td>

        </tr>




        @endforeach






    </tbody>
</table>


@endsection