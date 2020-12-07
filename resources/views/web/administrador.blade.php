@extends('layout.home')
<?php

function mostrarArticulos($articulos)
{
    return "The article {$articulos} ";
}


$articulos = ['title', 'title 2', 'title 3'];

$c = array_map('mostrarArticulos', $articulos);
print_r($c);


?>


@section('content')
<nav class="navbar navbar-expand-lg navbar navbar-dark" style="background-color: #0F305D;">
  <a class="navbar-brand" href="#">
	  <img src="https://www.acreditta.com/img/logo.svg" alt="" class="img-fluid logo-header">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Insignias Digitales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contáctanos</a>
      </li>
    </ul>
  </div>
</nav>
	<div class="pagina-soporte-container">
		<div class="row col-12">
			<h1 class="soporte-bienvenida"> Administrador </h1>
		</div>
		<div>
		<p class="soporte-descripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet volutpat consequat mauris nunc congue nisi vitae suscipit. Sit amet aliquam id diam maecenas ultricies. </p>
		</div>
		<div class="menu-principal-container">
    <div>

    </div>
		</div>
	</div>

@endsection