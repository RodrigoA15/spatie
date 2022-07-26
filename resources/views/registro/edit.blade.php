@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card card-body">
        <form action="{{route('registro.update', $registro)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Numero Documento</label>
              <input type="text" class="form-control" id="numero_documento" name="numero_documento" value="{{$registro->numero_documento}}">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Tipo</label>
              <input type="text" class="form-control" id="tipo" name="tipo" value="{{$registro->tipo}}">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
@endsection