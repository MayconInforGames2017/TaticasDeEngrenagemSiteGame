@extends('site.master.layout')

@section('content')

    <div class="jumbotron text-center">
        <div class="container">
            <h1 class="display-4">Bem-vindo ao Táticas de Engrenagem!</h1>
            <hr class="my-4">
            <p class="lead">Aqui você vai poder olha a documentação do nosso jogo e ficar por dentro de futuras atualizações e novidades na nossa página.</p>     
        </div>
    </div>

    <div class="container">

<!-- START THE FEATURETTES -->


<div class="row featurette">
<div class="col-md-7">
    <h2 class="featurette-heading">História. <span class="text-muted">Principal.</span></h2>
    <p class="lead">A história de Táticas de engrenagem acontece alguns anos depois do contra golpe de 1964.   
    </p>
</div>
    <div class="img-thumbnail">
        <img src="{{asset('imagens/soldado_menu.jpg')}}">
    </div>
</div>

@endsection