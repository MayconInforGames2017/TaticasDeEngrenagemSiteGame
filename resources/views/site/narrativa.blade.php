@extends('site.master.layout')

@section('content')

<div class="container">

<!-- START THE FEATURETTES -->

<hr class="featurette-divider">

<div class="row featurette">
<div class="col-md-7">
    <h2 class="featurette-heading">Tiro. <span class="text-muted">Só será possivel usar arma de fogo em momentos mais decisivos.</span></h2>
    <p class="lead">Você só usará a arma em momentos mais dificeis, por exemplo: enfrentar um super robó ou um pequeno pelotão que estará a sua procura.</p>
</div>
<div class="col-md-5">
<img src="{{asset('imagens/armas.jpg')}}">  
</div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
<div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">Estratégia. <span class="text-muted">Tenha paciência.</span></h2>
    <p class="lead">Você é paciente independente da situação? Se não, prepare-se pois você vai precisa, a cada fase terá inimigos mais espertos e cameras de segurança fazendo monitoramento a todo momento, em busca de algo inimigo.</p>
</div>
<div class="col-md-5 order-md-1">
<img src="{{asset('imagens/xadres.jpg')}}">  
</div>
</div>
<hr class="featurette-divider">

<!-- /END THE FEATURETTES -->
</div>

@endsection