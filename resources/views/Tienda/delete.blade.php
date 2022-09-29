@extends('Tienda.base')



@section('contentMain')


<h3 class="text-center my-5">Eliminar Producto</h3>


<h4 class="text-center my-5">¿Estas seguro en eliminar el siguiente producto?</h4>

<form action="{{route('producto.destroy',['producto'=> $id ])}}" method="POST" class="w-50 mx-auto">

    @method('DELETE')
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Nombre : </label>
        <input disabled type="text" class="form-control" name="nombre" value="{{$nombre}}" id="" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Precio Unidad :</label>
        <input disabled type="text" class="form-control" name="precio_unidad" value="{{$precio_unidad}}" id="" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input disabled type="text" class="form-control" name="descripcion" value="{{$descripcion}}" id="" aria-describedby="helpId" placeholder="">
    </div>


    <button type="submit" class="my-4 btn form-control btn-primary">Eliminar Producto</button>

    <a name="" id="" class="btn btn-secondary form-control" href="{{route('producto.index')}}" role="button">Volver</a>

</form>


@endsection