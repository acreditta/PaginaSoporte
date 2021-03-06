@extends('layout.home')

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
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.acreditta.com/insignias-digitales">Insignias Digitales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.acreditta.com/aprende">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.acreditta.com/nosotros">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.acreditta.com/contactanos">Contáctanos</a>
      </li>
    </ul>
  </div>
</nav>
	<div class="pagina-soporte-container">
      <div class="pagina-soporte-portada">
			<div class="pagina-soporte-textos">
      <h1 class="soporte-bienvenida"> ¡Hola! ¿Cómo podemos ayudarte? </h1>
      <p class="soporte-descripcion">¡Hola! Te damos la bienvenida al repositorio de conocimiento de Acreditta, este es un espacio en el cual podrás consultar todos nuestros artículos y ver videos tutoriales que te explicaran paso a paso el manejo de las funcionalidades de la plataforma de insignias digitales.</p>
      </div>
      <div class="pagina-soporte-imagen-container">
      <img src="https://acreditta.com/uploads/blog/202011241214176.png" alt="">
      </div>
      </div>
		<div>
		</div>
		<div class="menu-principal-container">
		<div class="acreditados-card">
			<h1 class="acreditados-card-title">Artículos para acreditados</h1>
			<p class="acreditados-card-desc">Soporte para aquellos que han recibido insignias digitales emitidas a través de Acreditta</p>
			<a href="/acreditados" class="ir-al-articulo-button">Ir</a>
		</div>
		<div class="administradores-card">
			<h1 class="administrador-card-title">Artículos para administradores</h1>
			<p class="administrador-card-desc">Artículos para quienes emiten insignias a sus estudiantes y clientes con Acreditta</p>
			<a href="/administrador" class="ir-al-articulo-button">Ir</a>
		</div>
	</div>

@endsection