@extends('layouts.outerdash')
@section('content')


<form method="POST" action="/plataformas">
    @csrf
  <div class="bg-secondary rounded h-100 p-4">
      <h6 class="mb-4">Plataformas</h6>
      <div class="form-floating mb-3">
          <input type="text" class="form-control" id="plataforma" name="plataforma" placeholder="">
          @error('plataforma')
          <P class="txt-danger">
              {{ $errors->first('plataforma') }}
          </P>
      @enderror
          <label for="plataforma">Plataforma:</label>
      </div>
      <div class="form-floating">
       <button class="submit">Enviar</button>
      </div>
  </div>
</form>

@endsection
