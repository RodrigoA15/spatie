@extends('layouts.app')

@section('content')
<div class="container">
    <button class="btn btn-primary" onclick="location.href='{{route('registro.create')}}'">Nuevo</button>
    <table class="table table-dark table-responsive">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Numero documento</th>
            <th scope="col">Tipo</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($registro as $registros)
          <tr>
            <th scope="row">{{$registros->id}}</th>
            <td>{{$registros->numero_documento}}</td>
            <td>{{$registros->tipo}}</td>
            <td>
                <a href="/registro/{{$registros->id}}/edit" class="btn btn-warning">Editar</a>

                <form action="{{route('registro.destroy', $registros)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Eliminar</button></form>
            </td>
            
          </tr>
          @endforeach
         
        </tbody>
      </table>
</div>
@endsection