<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Menu</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
</body>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ (Route::current()->getName() === 'site.home' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.home') }}">Home</a></li>
        <li class="nav-item {{ (Route::current()->getName() === 'site.gamedesign' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.gamedesign') }}">Game Design</a></li>
        <li class="nav-item {{ (Route::current()->getName() === 'site.niveis' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.niveis') }}">Níveis</a></li>
        <li class="nav-item {{ (Route::current()->getName() === 'site.narrativa' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.narrativa') }}">Narrativa</a></li>
        <li class="nav-item {{ (Route::current()->getName() === 'site.ritmo' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.ritmo') }}">Ritmo</a></li>
        <li class="nav-item {{ (Route::current()->getName() === 'site.personagens' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.personagens') }}">Personagens</a></li>
        <li class="nav-item {{ (Route::current()->getName() === 'site.jogabilidade' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.jogabilidade') }}">Jogabilidade</a></li>
        <li class="nav-item {{ (Route::current()->getName() === 'site.graficos' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.graficos') }}">Gráficos</a></li>
        <li class="nav-item {{ (Route::current()->getName() === 'site.musicalizacao' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.musicalizacao') }}">Musicalização</a></li>
        <li class="nav-item {{ (Route::current()->getName() === 'site.sobre' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.sobre') }}">Sobre</a></li>
        <li class="nav-item {{ (Route::current()->getName() === 'site.forum' ? 'active' : '') }}"><a class="nav-link" href="{{ route('site.forum') }}">Discussões</a></li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>

<main role="main">

  @yield('content')

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; <?= date('y') ?> Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
</html>