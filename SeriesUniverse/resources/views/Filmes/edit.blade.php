@extends('layouts.outerdash')
@section('content')
<form method="POST" action="/Filmes/{{$filme->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <div class="bg-secondary rounded h-100 p-4">
      <h6 class="mb-4">Filmes</h6>
      <div class="form-floating mb-3">
          <input type="text" class="form-control" id="titulo" name="titulo" placeholder=""
          required value="{{empty(old('titulo')) ? $filme->titulo : old('titulo')}}">
          <label for="titulo">Titulo:</label>
      </div>
      <div class="form-floating mb-3">
        <input type="date" class="form-control" id="datalancamento" name="datalancamento" placeholder=""
        required value="{{empty(old('datalancamento')) ? $filme->ano_lancamento : old('datalancamento')}}">
        @error('datalancamento')
        <P class="txt-danger">
            {{ $errors->first('datalancamento') }}
        </P>
    @enderror
        <label for="datalancamento">Data de lançamento:</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="duracao" name="duracao" placeholder=""
        required value="{{empty(old('duracao')) ? $filme->duracao : old('duracao')}}">
        @error('duracao')
        <P class="txt-danger">
            {{ $errors->first('duracao') }}
        </P>
    @enderror
        <label for="duracao">Duração:</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="realizador" name="realizador" placeholder=""
        required value="{{empty(old('realizador')) ? $filme->realizador : old('realizador')}}">
        @error('realizador')
        <P class="txt-danger">
            {{ $errors->first('realizador') }}
        </P>
    @enderror
        <label for="realizador">Realizador:</label>
    </div>
      <div class="form-floating mb-3">
          <select class="form-select" id="plataforma" name="plataforma" aria-label="Floating label select example">
              <option selected disabled>Qual é a Plataforma</option>
              @foreach ($plataformas as $cat)
              @if ($filme->plataforma_id==$cat->id)
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
           @if ($filme->categoria_id==$cat->id)
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
          <textarea class="form-control" placeholder=""  name="resumo" id="resumo" style="height: 150px;">
            {{$filme->descricao}}
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
            {{$filme->elenco}}
        </textarea>
          @error('elenco')
          <P class="txt-danger">
              {{ $errors->first('elenco') }}
          </P>
      @enderror
      </div>
      <div class="form-floating mb-3">
        <input type="file" class="custom-file-input" id="imagem" name="imagem">
        @error('imagem')
        <P class="txt-danger">
            {{ $errors->first('imagem') }}
        </P>
    @enderror
        <label  for="imagem">Insira uma imagem</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="triler" name="triler" placeholder="">
        @error('triler')
        <P class="txt-danger">
            {{ $errors->first('triler') }}
        </P>
    @enderror
        <label for="triler">Triler:</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="avaliacao" name="avaliacao" placeholder=""
        required value="{{empty(old('avaliacao')) ? $filme->avaliacao : old('avaliacao')}}"">
        @error('avaliacao')
        <P class="txt-danger">
            {{ $errors->first('avaliacao') }}
        </P>
    @enderror
        <label for="avaliacao">Avaliação:</label>
    </div>
    <div class="form-group">
        <label for="destaque">Destaque</label>
        <div>
          <input class="form-control"  type="checkbox" id="destaque" name="destaque" {{ ($artigo->destaque == '1') ? 'checked':'' }}
            data-bootstrap-switch data-on-color="success">
        </div>
      </div>
      <div class="form-floating">
       <button class="submit">Enviar</button>
      </div>
  </div>
</form>
@endsection
