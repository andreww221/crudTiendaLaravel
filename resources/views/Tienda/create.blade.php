@extends('Tienda.base')


@section('contentMain')






@if(session('incorrectData') != null )

    <div class="alert alert-danger" role="alert">
        {{ session('incorrectData') }}
    </div>

@endif



<h3 class="text-center my-5">Crear Producto</h3>


<form action="{{route('producto.store')}}" method="POST" class="w-50 mx-auto">


    @method('POST')
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Nombre : </label>
        <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}" id="" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Precio Unidad :</label>
        <input type="text" class="form-control" name="precio_unidad"  value="{{old('precio_unidad')}}"id="" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input type="text" class="form-control" name="descripcion" value="{{old('descripcion')}}" id="" aria-describedby="helpId" placeholder="">
    </div>


    <button type="submit" class="btn form-control btn-primary">Crear Producto</button>

</form>


@endsection