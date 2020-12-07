@extends('layout.home')

<?php 

$articulosAcreditado = array(['Tengo certificaciones adicionales de un emisor de insignias de Acclaim. ¿Cómo obtengo insignias para esas certificaciones?', 'Algunos emisores optan por ofrecer insignias para una selección de sus
programas, como la versión más actual de una certificación...
', 'https://www.acreditta.com/Articulos/Acreditado/Aceptar_una_insignia/Tengo_Certificaciones.pdf'], ['¿Cómo aceptar y compartir una insignia?', 'Recibirás un correo notificándote que se te ha emitido una insignia. Haz clic en “Accept your badge” y eso te llevará a la plataforma...
', 'https://www.acreditta.com/Articulos/Acreditado/Aceptar_una_insignia/C-mo-aceptar-y-compartir-mi-insignia_.pdf'], ['¿Cómo administro una insignia emitida a mi organización?', 'Hay dos tipos de insignias emitidas en Acclaim: insignias de usuario e insignias
institucionales...', 'https://www.acreditta.com/Articulos/Acreditado/Aceptar_una_insignia/C-mo-administro-una-insignia-emitida-a-mi-organizaci-n_.pdf'], ['¿Cómo empiezo?
', 'Hay dos pasos para comenzar con Acclaim...
', 'https://www.acreditta.com/Articulos/Acreditado/Aceptar_una_insignia/C-mo-empiezo.pdf'],['¿Cómo puedo asegurarme de recibir el correo electrónico de
notificación de mi insignia?
', 'Para asegurarse de recibir el correo electrónico de notificación de su insignia y que no termine en su carpeta de correo no deseado..', 'https://www.acreditta.com/Articulos/Acreditado/Aceptar_una_insignia/C-mo-puedo-asegurarme-de-recibir-el-correo-electr-nico-de-notificaci-n-de-mi-insignia_.pdf'],['¿Cómo puedo solicitar una insignia si no se ofrece en la
  plataforma Acclaim?', 'Si desea una insignia para una credencial específica, certificación u otro reconocimiento de una organización ...', 'https://www.acreditta.com/Articulos/Acreditado/Aceptar_una_insignia/C-mo-puedo-solicitar-una-insignia-si-no-se-ofrece-en-la-plataforma-Acclaim_.pdf'],['¿Puedo aceptar insignias automáticamente?','Si lo desea puede configurar su perfil de Acclaim para aceptar automáticamente las insignias que recibe de organizaciones específicas...','https://www.acreditta.com/Articulos/Acreditado/Aceptar_una_insignia/Puedo-aceptar-insignias-autom-ticamente_.pdf'],['¿Solicitó restablecer la contraseña pero no ha recibido el
    correo electrónico de confirmación?', 'Puede haber un par de razones por las que no recibe el correo electrónico para
    restablecer su contraseña...', 'https://www.acreditta.com/Articulos/Acreditado/Aceptar_una_insignia/Solicit-restablecer-la-contrase-a-pero-no-ha-recibido-el-correo-electr-nico-de-confirmaci-n_.pdf'], ['¿Cómo comparto mi insignia con XING?', 'Para compartir su insignia con XING, siga estos pasos...', 'https://www.acreditta.com/Articulos/Acreditado/Compartir_mi_insignia/C-mo-comparto-mi-insignia-con-XING_.pdf'])

?>

@section('content')
<nav class="navbar navbar-expand-lg navbar navbar-dark" style="background-color: #0F305D;">
  <a class="navbar-brand" href="/">
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
	<div class="pagina-acreditado-container">
		<div class="row col-12">
			<h1 class="acreditado-bienvenida"> Acreditado </h1>
		</div>
    <div>
    <div class="articulos-container">
    @foreach ($articulosAcreditado as $articulo)
    <div class="articulo-preview">
      <a href={{$articulo[2]}} target="_blank">
      <h1>{{$articulo[0]}}</h1>
      <p>{{$articulo[1]}}</p>
      </a>
    </div>
    @endforeach
  </div>
    </div>
	</div>

@endsection