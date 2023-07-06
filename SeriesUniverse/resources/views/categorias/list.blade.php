@extends('layouts.outerdash')
@section('content')

<div class="bg-secondary rounded h-100 p-4">
<h6 class="mb-4">Listar Categorias</h6>
<div class="table-responsive">
<table class="table text-start align-middle table-bordered table-hover mb-0">
    <thead>
        <tr class="text-white">
            <th scope="col">Categorias</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categorias as $categoria)
        <tr>
            <td>{{$categoria->genero}}</td>
            <td><a href="/categorias/{{ $categoria->id }}/edit">{{ $categoria->genero }}</a></td>
            <td>
                <form action="/categorias/{{ $categoria->id }}" method="post">
                 @csrf
                 @method('DELETE')

                <button type="submit" class="link" style="background-color: transparent; border:none">
                    <i class="fas fa-trash text-danger" data-toogle="tooltip" title="Eliminar"></i>
                </button>
            </form>
             </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
@endsection
