@extends('Tienda.base')


@section('contentMain')

<form action="" class="w-50 mx-auto">

    <div class="mb-3">
        <label for="" class="form-label">Nombre : </label>
        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Precio Unidad :</label>
        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
    </div>


    <button type="submit" class="btn form-control btn-primary">Crear Producto</button>

</form>


@endsection