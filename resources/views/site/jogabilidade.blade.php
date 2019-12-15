@extends('site.master.layout')

@section('content')

<div class="container">

<!-- START THE FEATURETTES -->

<hr class="featurette-divider">

<div class="row featurette">
<div class="col-md-7">
    <h2 class="featurette-heading">Jogabilidade.</span></h2>
    <p class="lead">O jogador deve controlar Wolf Lone "Lobo solitário" pelas áreas do jogo sem ser visto pelos inimigos. Se o jogador mover-se para dentro do campo de visão de algum deles, ou  
    ao alcance de alguma câmera, o alarme será disparado, fazendo com que vários inimigos armados venham averiguar. Isto ativa o "Modo de Alerta", onde o jogador deve se esconder-se e permanecer assim 
    até que o "Modo de Evasão" comece. Assim que o contador deste último modo zerar, o jogo retorna ao "Modo Normal", onde inimigos não suspeitam de sua presença. 
    </p>
</div>
    <div class="img-thumbnail">
        <img src="{{asset('imagens/soldado_menu.jpg')}}">
    </div>
</div>

@endsection