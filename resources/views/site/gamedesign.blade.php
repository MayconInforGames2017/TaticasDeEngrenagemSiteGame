@extends('site.master.layout')

@section('content')

    <div class="container">

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Perfil. <span class="text-muted">Jogadores alvos acima dos 12 anos.</span></h2>
            <p class="lead">Curiosidade. "Segundo uma pesquisa, 23% dos entrevistados declaram jogar videogame ou algum tipo de jogo eletrônico, ainda que de vez em quando. Além disso, o futebol, preferência nacional, perde a hegemonia entre os games. Na preferência dos jogadores, os games de Ação e Aventura são destaque, enquanto a categoria Futebol ocupa a segunda posição, seguida pelos games de Corridas de carro." Mundo do Marketing.</p>
        </div>
            <div class="col-md-5">
                <img src="{{asset('imagens/games.jpg')}}">        
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">O Game será desenvolvido apenas para computadores. <span class="text-muted">As especificações do Computador são:.</span></h2>
            <p class="lead">Sistema operacional: Windows 7 (64-bit)
                            Processador: Core 2 Duo 2.2 GHz / AMD Athlon 64 X2 2.66GHz.
                            Memória: 2 GB RAM.
                            Placa de vídeo: Nvidia Geforce 8600 ou GT 630 / Radeon HD 6750.
                            DirectX: Versão 9.0.
                            Armazenamento: 5 GB de espaço livre..</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="{{asset('imagens/desktop.jpg')}}">  
        </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Gênero. <span class="text-muted">Ação-aventura.</span></h2>
            <p class="lead">É um jogo eletrônico que combina elementos do gênero de jogo de aventura com vários elementos de jogos de ação. Este talvez seja o mais amplo e diverso gênero em jogos eletrônicos. O primeiro jogo deste gênero foi Adventure (1979), lançado para Atari 2600.

                Tipicamente:

                Jogos puramente de aventura possuem problemas para o jogador solucionar, com pouca ou nenhuma ação. Se existe ação, é geralmente isolado em minigames.
                Jogos puramente de ação possuem uma jogabilidade baseada em interações em tempo real que desafiam os reflexos.
                Jogos de ação-aventura requerem tanto reflexos como soluções para problemas, em situações violentas ou não-violentas. </p>
        </div>
            <div class="col-md-5">
                <img src="{{asset('imagens/generos.jpg')}}"> 
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->
    </div>
@endsection