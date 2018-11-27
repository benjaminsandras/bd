<!DOCTYPE html>
<html>
<head>
	<title>@yield('titre')</title>
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div id="firstText" class="container">
    <div class="row">
      <div class="col-sm-4"><h1 id="fistword">BD'tek...</h1></div>
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
        <em id="secondText">dans</em>
        <em id="thirdText">ta</em>
        <em id="fourthText">gueule</em></div>
      </div>
    </div>
</div>

	<nav class="navbar navbar-dark navbar-expand-lg" style="background-color: black;">
  <a class="navbar-brand" href="http://localhost:8000">Accueil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost:8000/Collection">Collection <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost:8000/mon_espace">Mon espace</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost:8000/BD">Afficher Collection</a>
          <a class="dropdown-item" href="http://localhost:8000/tome">tome</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="http://localhost:8000/favoris">favoris</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

@yield('contenu')
@yield('Accueil')
@yield('tome')
@yield('Collection')
@yield('mon_espace')
@yield('dispcollection')

<div id="blank"></div>
<div id="demo" class="carousel slide" data-ride="carousel">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item active">
      @foreach ($decouverte1 as $decouverte1)
        <img class="img_carroussel"src="{{$decouverte1->image_collection}}" alt="" width="1100" height="500">
      @endforeach
    </div>
    <div class="carousel-item">
      @foreach ($decouverte2 as $decouverte2)
        <img class="img_carroussel" src="{{$decouverte2->image_collection}}" alt="" width="1100" height="500">
      @endforeach
    </div>
    <div class="carousel-item">
      @foreach ($decouverte3 as $decouverte3)
        <img class="img_carroussel" src="{{$decouverte3->image_collection}}" alt="" width="1100" height="500">
      @endforeach
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>