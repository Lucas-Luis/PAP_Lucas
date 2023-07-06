@extends('layouts.outerdash')
@section('content')

<div class="bg-secondary rounded h-100 p-4">
<h6 class="mb-4">Listar Series</h6>
<div class="table-responsive">
<table class="table text-start align-middle table-bordered table-hover mb-0">
    <thead>
        <tr class="text-white">
            <th scope="col">Titulo</th>
            <th scope="col">Plataforma</th>
            <th scope="col">Categoria</th>
            <th scope="col">imagem</th>
            <th scope="col">triler</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($series as $serie)
        <tr>
        <td>{{$serie->titulo}}</td>
        <td>{{$serie->plataforma->nome}}</td>
        <td>{{$serie->categoria->genero}}</td>
        <td>{{$serie->imagem}}</td>
        <td>{{$serie->trailer}}</td>
        <td><a href="/series/{{ $serie->id }}/edit">{{ $serie->titulo }}</a></td>
             <td>
                 <form action="/series/{{ $serie->id }}" method="post">
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
