@extends("main")

@section("content")

<p>
    Lista Posts
</p>

<div class="row">
<?php foreach ($posts as $value) : ?>
<div class="col-md-4">
<div class="thumbnail">
<td><img src="{{ url($value->imagem)}}"
      width="100"/>
</td>

<div class="caption">
<h3>{!!$value->titulo !!}</h3>
<span class="pull-right"> {!! $value->created_at->diffForHumans() !!} </span>
<p>
<a href="#" class="btn btn-primary" role="button">Editar</a>
<a href="#" class="btn btn-danger" role="button">Excluir</a>
</p>
</div>
</div>
</div>
<?php endforeach ?>
</div>

@endsection
