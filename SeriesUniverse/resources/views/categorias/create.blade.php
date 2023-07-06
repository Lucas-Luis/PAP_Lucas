@extends('layouts.outerdash')
@section('content')


<form method="POST" action="/categorias">
@csrf
  <div class="bg-secondary rounded h-100 p-4">
      <h6 class="mb-4">Categorias</h6>
      <div class="form-floating mb-3">
          <input type="text" required class="form-control" name="categoria" id="categoria" placeholder="">
          @error('categoria')
          <P class="txt-danger">
              {{ $errors->first('categoria') }}
          </P>
      @enderror
          <label for="categoria">Categoria:</label>
      </div>
      <div class="form-floating">
       <button class="submit">Enviar</button>
      </div>
  </div>
</form>


@endsection
