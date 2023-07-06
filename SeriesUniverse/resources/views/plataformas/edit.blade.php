@extends('layouts.outerdash')
@section('content')

<form method="POST" action="/plataformas/{{$plataforma->id}}">
    @csrf
    @method('PUT')

  <div class="bg-secondary rounded h-100 p-4">
      <h6 class="mb-4">Plataformas</h6>
      <div class="form-floating mb-3">
          <input type="text" class="form-control" name="plataforma" id="plataforma"
              placeholder="" required value="{{empty(old('plataforma')) ? $plataforma->nome : old('plataforma')}}">
          <label for="plataforma">Plataforma:</label>
      </div>
      <div class="form-floating">
       <button class="submit">Enviar</button>
      </div>
  </div>

</form>

@endsection
