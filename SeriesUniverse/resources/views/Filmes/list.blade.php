@extends('layouts.outerdash')
@section('content')

<div class="bg-secondary rounded h-100 p-4">
<h6 class="mb-4">Listar Filmes</h6>
<div class="table-responsive">
<table class="table text-start align-middle table-bordered table-hover mb-0">
    <thead>
        <tr class="text-white">
            <th scope="col">Titulo</th>
            <th scope="col">Plataforma</th>
            <th scope="col">Genero</th>
            <th scope="col">Imagem</th>
            <th scope="col">Triler</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
       @foreach ($filmes as $filme)
       <tr>
       <td>{{$filme->titulo}}</td>
       <td>{{$filme->plataforma->nome}}</td>
       <td>{{$filme->categoria->genero}}</td>
       <td>{{$filme->imagem}}</td>
       <td>{{$filme->trailer}}</td>
       <td><a href="/Filmes/{{ $filme->id }}/edit">{{ $filme->titulo }}</a></td>
            <td>
                <form action="/Filmes/{{ $filme->id }}" method="post">
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
