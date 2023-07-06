@extends('layouts.outerdash')
@section('content')


<form method="POST" action="/series/{{$serie->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <div class="bg-secondary rounded h-100 p-4">
      <h6 class="mb-4">Series</h6>
      <div class="form-floating mb-3">
          <input type="text" class="form-control" name="titulo" id="titulo" placeholder=""
          required value="{{empty(old('titulo')) ? $serie->titulo : old('titulo')}}">
          @error('titulo')
          <P class="txt-danger">
              {{ $errors->first('titulo') }}
          </P>
      @enderror
          <label for="titulo">Titulo:</label>
      </div>
      <div class="form-floating mb-3">
        <input type="date" class="form-control" name="datalancamento" id="datalancamento" placeholder=""
        required value="{{empty(old('datalancamento')) ? $serie->ano_lancamento : old('datalancamento')}}">
        @error('datalancamento')
        <P class="txt-danger">
            {{ $errors->first('datalancamento') }}
        </P>
    @enderror
        <label for="datalancamento">Data de lançamento:</label>
    </div>
      <div class="form-floating mb-3">
          <input type="text" class="form-control" name="temporadas" id="temporadas" placeholder=""
          required value="{{empty(old('temporadas')) ? $serie->temporadas : old('temporadas')}}">
          @error('temporadas')
          <P class="txt-danger">
              {{ $errors->first('temporadas') }}
          </P>
      @enderror
          <label for="temporadas">Temporadas:</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="realizador" id="realizador" placeholder=""
        required value="{{empty(old('realizador')) ? $serie->realizador : old('realizador')}}">
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
              @if ($serie->plataforma_id==$cat->id)
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
            @if ($serie->categoria_id==$cat->id)
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
          <textarea class="form-control" placeholder="resumo" name="resumo" id="resumo" style="height: 150px;">
            {{$serie->descricao}}
        </textarea>
          @error('resumo')
          <P class="txt-danger">
              {{ $errors->first('resumo') }}
          </P>
      @enderror
      </div>
      <div class="form-floating mb-3">
        <label for="elenco">Elenco:</label>
          <textarea class="form-control" placeholder="" name="elenco" id="elenco" style="height: 150px;">
            {{$serie->elenco}}
        </textarea>
          @error('elenco')
          <P class="txt-danger">
              {{ $errors->first('elenco') }}
          </P>
      @enderror
      </div>
      <div class="form-floating mb-3">
        <input type="file" class="custom-file-input" id="imagem" name="imagem">
        <label  for="imagem">Insira uma imagem</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="trailer" id="trailer" placeholder=""
        required value="{{empty(old('trailer')) ? $serie->trailer : old('trailer')}}">
        @error('trailer')
        <P class="txt-danger">
            {{ $errors->first('trailer') }}
        </P>
    @enderror
        <label for="triler">Triler:</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="avaliacao" id="avaliacao" placeholder=""
        required value="{{empty(old('avaliacao')) ? $serie->avaliacao : old('avaliacao')}}">
        @error('avaliacao')
        <P class="txt-danger">
            {{ $errors->first('avaliacao') }}
        </P>
    @enderror
        <label for="avaliacao">Avaliação:</label>
    </div>
      <div class="form-floating mb-3">
       <button class="submit">Enviar</button>
      </div>
  </div>
</form>


@endsection
