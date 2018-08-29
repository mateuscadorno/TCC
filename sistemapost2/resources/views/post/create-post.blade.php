@extends("main")

@section("content")

<form action="{{ url('criar-post')}} " method="post" enctype="multipart/form-data">
{!! csrf_field() !!}

@if (session('erro'))
<div class="alert alert-danger">
{{ session('erro') }}
</div>
@endif

  <div class="form-group">
    <label for="titulo">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo da Postagem">
  <div class="form-group">
    <label for="conteudo">Conteudo</label>
    <textarea type="text" name="conteudo" rows="8" cols="40" class="form-control" id="conteudo" placeholder="Conteudo"></textarea>
  </div>
  <div class="form-group">
    <label for="imagem">Imagem</label>
    <input type="file" name="imagem" class="form-control-file" id="imagem">
  </div>
  
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection