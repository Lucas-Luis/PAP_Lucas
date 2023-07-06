@extends('layouts.outerdash')
@section('content')
<form method="POST" action="/Filmes" enctype="multipart/form-data">
    @csrf
  <div class="bg-secondary rounded h-100 p-4">
      <h6 class="mb-4">Filmes</h6>
      <div class="form-floating mb-3">
          <input type="text" class="form-control" id="titulo" name="titulo" placeholder="">
          @error('titulo')
          <P class="txt-danger">
              {{ $errors->first('titulo') }}
          </P>
      @enderror
          <label for="titulo">Titulo:</label>
      </div>
      <div class="form-floating mb-3">
        <input type="date" class="form-control" id="datalancamento" name="datalancamento" placeholder="">
        @error('datalancamento')
        <P class="txt-danger">
            {{ $errors->first('datalancamento') }}
        </P>
    @enderror
        <label for="datalancamento">Data de lançamento:</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="duracao" name="duracao" placeholder="">
        @error('duracao')
        <P class="txt-danger">
            {{ $errors->first('duracao') }}
        </P>
    @enderror
        <label for="duracao">Duração:</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="realizador" name="realizador" placeholder="">
        @error('realizador')
        <P class="txt-danger">
            {{ $errors->first('realizador') }}
        </P>
    @enderror
        <label for="realizador">Realizador:</label>
    </div>
      <div class="form-floating mb-3">
          <select class="form-select" id="plataforma" name="plataforma" aria-label="Floating label select example">
              <option selected>Qual é a Plataforma</option>
              @foreach ($plataformas as $cat)
              @if (old("plataforma")==$cat->id)
              <option value="{{ $cat->id }}" selected>{{ $cat->nome }}</option>
          @else
          <option value="{{ $cat->id }}" >{{ $cat->nome }}</option>
          @endif
              @endforeach
          </select>
          <label for="plataforma">Plataforma:</label>
      </div>
      <div class="form-floating mb-3">
        <select class="form-select" id="categoria" name="categoria" aria-label="Floating label select example">
            <option selected>Qual é a Categoria</option>
           @foreach ($categorias as $cat)
           @if (old('categoria')==$cat->id)
           <option value="{{ $cat->id }}" selected>{{ $cat->genero }}</option>
       @else
       <option value="{{ $cat->id }}" >{{ $cat->genero }}</option>
       @endif
           @endforeach
        </select>
        <label for="categoria">Categoria:</label>
    </div>
      <div class="form-floating mb-3">
        <label for="resumo">Resumo:</label>
          <textarea class="form-control" placeholder="" name="resumo" id="resumo" style="height: 150px;"></textarea>
          @error('resumo')
          <P class="txt-danger">
              {{ $errors->first('resumo') }}
          </P>
      @enderror
      </div>
      <div class="form-floating mb-3">
        <label for="elenco">Elenco:</label>
          <textarea class="form-control" placeholder="" name="elenco" id="elenco" style="height: 150px;"></textarea>
          @error('elenco')
          <P class="txt-danger">
              {{ $errors->first('elenco') }}
          </P>
      @enderror
      </div>
       <div class="mb-3">
            <label for="imagem" class="form-label" >Insira uma imagem</label>
            <input class="form-control bg-dark" type="file"  id="imagem" name="imagem">
            @error('imagem')
            <P class="txt-danger">
                {{ $errors->first('imagem') }}
            </P>
        @enderror
        </div>
      <div class="form-floating mb-3">
        <input type="t" class="form-control" id="triler" name="triler" placeholder="">
        @error('triler')
        <P class="txt-danger">
            {{ $errors->first('triler') }}
        </P>
    @enderror
        <label for="triler">Triler:</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="avaliacao" name="avaliacao" placeholder="">
        @error('avaliacao')
        <P class="txt-danger">
            {{ $errors->first('avaliacao') }}
        </P>
    @enderror
        <label for="avaliacao">Avaliação:</label>
    </div>
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch"
            id="destaque" name="destaque"  {{ old('destaque') ? 'checked': '' }}>
        <label class="form-check-label" for="destaque">Destaque</label>
    </div>
      <div class="form-floating">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>

  </div>
</form>
@endsection
