@extends('Tienda.base')





@section('contentMain')

@if(session('incorrectData') != null )

<div class="alert alert-danger" role="alert">
    {{ session('incorrectData') }}
</div>

@endif



<h3 class="text-center my-5">Actualizar Producto</h3>



<form action="{{route('producto.update',['producto'=> $id ])}}" method="POST" class="w-50 mx-auto">


    @method('PUT')
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Nombre : </label>
        <input type="text" class="form-control" name="nombre" value="{{$nombre}}" id="" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Precio Unidad :</label>
        <input type="text" class="form-control" name="precio_unidad" value="{{$precio_unidad}}" id="" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input type="text" class="form-control" name="descripcion" value="{{$descripcion}}" id="" aria-describedby="helpId" placeholder="">
    </div>


    <button type="submit" class="my-4 btn form-control btn-primary">Actualizar Producto</button>

    <a name="" id="" class="btn btn-secondary form-control" href="{{route('producto.index')}}" role="button">Volver</a>

</form>



@endsection