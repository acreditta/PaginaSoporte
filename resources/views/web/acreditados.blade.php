@extends('layout.home')

<?php 

$articulosAcreditado = array(['¿Cómo aceptar y compartir una insignia?', 'Recibirás un correo notificándote que se te ha emitido una insignia. Haz clic en “Accept your badge” y eso te llevará a la plataforma...
', 'https://www.acreditta.com/Articulos/Acreditado/Aceptar_una_insignia/C-mo-aceptar-y-compartir-mi-insignia_.pdf'], ['¿Cómo administro una insignia emitida a mi organización?', 'Hay dos tipos de insignias emitidas en Acclaim: insignias de usuario e insignias
institucionales...', 'https://www.acreditta.com/Articulos/Acreditado/Aceptar_una_insignia/C-mo-administro-una-insignia-emitida-a-mi-organizaci-n_.pdf'],['¿Cómo puedo asegurarme de recibir el correo electrónico de
notificación de mi insignia?
', 'Para asegurarse de recibir el correo electrónico de notificación de su insignia y que no termine en su carpeta de correo no deseado..', 'https://www.acreditta.com/Articulos/Acreditado/Aceptar_una_insignia/C-mo-puedo-asegurarme-de-recibir-el-correo-electr-nico-de-notificaci-n-de-mi-insignia_.pdf'],['¿Cómo puedo solicitar una insignia si no se ofrece en la
  plataforma Acclaim?', 'Si desea una insignia para una credencial específica, certificación u otro reconocimiento de una organización ...', 'https://www.acreditta.com/Articulos/Acreditado/Aceptar_una_insignia/C-mo-puedo-solicitar-una-insignia-si-no-se-ofrece-en-la-plataforma-Acclaim_.pdf'],['¿Puedo aceptar insignias automáticamente?','Si lo desea puede configurar su perfil de Acclaim para aceptar automáticamente las insignias que recibe de organizaciones específicas...','https://www.acreditta.com/Articulos/Acreditado/Aceptar_una_insignia/Puedo-aceptar-insignias-autom-ticamente_.pdf'],['¿Solicitó restablecer la contraseña pero no ha recibido el
    correo electrónico de confirmación?', 'Puede haber un par de razones por las que no recibe el correo electrónico para
    restablecer su contraseña...', 'https://www.acreditta.com/Articulos/Acreditado/Aceptar_una_insignia/Solicit-restablecer-la-contrase-a-pero-no-ha-recibido-el-correo-electr-nico-de-confirmaci-n_.pdf'], ['¿Cómo comparto mi insignia?', 'Con las opciones para compartir de Acclaim, los acreditados pueden compartir sus insignias directamente en LinkedIn, Twitter y Facebook desde su cuenta de Acclaim', 'https://www.acreditta.com/Articulos/Acreditado/Compartir_mi_insignia/C-mo-comparto-mi-insignia_.pdf'], ['¿Cómo comparto mi insignia en Facebook Messenger?', 'Ahora puede compartir su insignia a través de Facebook Messenger usando su dispositivo móvil..', 'https://www.acreditta.com/Articulos/Acreditado/Compartir_mi_insignia/C-mo-comparto-mi-insignia-en-Facebook-Messenger_.pdf'], ['¿Cómo comparto mi insignia en Facebook?', 'Con las opciones para compartir de Acclaim, los acreditados pueden compartir sus insignias directamente en LinkedIn, Twitter y Facebook desde...', 'https://www.acreditta.com/Articulos/Acreditado/Compartir_mi_insignia/C-mo-comparto-mi-insignia-en-Facebook_.pdf'], ['¿Cómo comparto mi insignia en la página de mi organización en Facebook?', 'Comparta fácilmente su insignia en la página de su organización creando una publicación y fijándola en la parte superior de...', 'https://www.acreditta.com/Articulos/Acreditado/Compartir_mi_insignia/C-mo-comparto-mi-insignia-en-la-p-gina-de-mi-organizaci-n-en-Facebook_.pdf'],['¿Cómo comparto mi insignia en Twitter?', 'Con las opciones para compartir de Acclaim, los acreditados pueden compartir sus insignias directamente en LinkedIn, Twitter y Facebook...', 'https://www.acreditta.com/Articulos/Acreditado/Compartir_mi_insignia/C-mo-comparto-mi-insignia-en-Twitter_.pdf'], ['¿Cómo comparto mi insignia con XING?', 'Para compartir su insignia con XING, siga estos pasos...', 'https://www.acreditta.com/Articulos/Acreditado/Compartir_mi_insignia/C-mo-comparto-mi-insignia-con-XING_.pdf'],['¿Cómo comparto mi perfil de Acclaim?', 'Además de compartir sus insignias individuales, ahora puede compartir su perfil público completo y publicar la URL en cualquier lugar que desee...', 'https://www.acreditta.com/Articulos/Acreditado/Compartir_mi_insignia/C-mo-comparto-mi-perfil-de-Acclaim_.pdf'], ['¿Cómo puedo agregar mi insignia a mi perfil de LinkedIn y compartirla en mi feed?', 'Puede agregar su insignia a su perfil de LinkedIn y / o compartirla en su feed a través de las opciones Compartir...', 'https://www.acreditta.com/Articulos/Acreditado/Compartir_mi_insignia/C-mo-puedo-agregar-mi-insignia-a-mi-perfil-de-LinkedIn-y-compartirla-en-mi-feed_.pdf'], ['¿Cómo puedo embeber mi insignia en un sitio web?', 'Para insertar su insignia, primero debe asegurarse de que la ha aceptado y la ha hecho pública...', 'https://www.acreditta.com/Articulos/Acreditado/Compartir_mi_insignia/C-mo-puedo-embeber-mi-insignia-en-un-sitio-web_.pdf'], ['¿Cómo empiezo?', 'Hay dos pasos para comenzar con Acclaim...
    ', 'https://www.acreditta.com/Articulos/Acreditado/Aceptar_una_insignia/C-mo-empiezo.pdf'], ['Tengo certificaciones adicionales de un emisor de insignias de Acclaim. ¿Cómo obtengo insignias para esas certificaciones?', 'Algunos emisores optan por ofrecer insignias para una selección de sus
    programas, como la versión más actual de una certificación...
    ', 'https://www.acreditta.com/Articulos/Acreditado/Aceptar_una_insignia/Tengo_Certificaciones.pdf'], ['¿Cómo puedo publicar en Blockchain?','Nos complace anunciar que la publicación en blockchain es ahora una función
    para organizaciones seleccionadas en la plataforma Acclaim. La capacidad debe..', 'https://www.acreditta.com/Articulos/Acreditado/Compartir_mi_insignia/C-mo-puedo-publicar-en-Blockchain_.pdf'], ['¿Cómo se verá mi insignia en Facebook?', 'Compartir en Facebook es una manera fácil de notificar a su red de amigos
      sobre sus logros. A continuación, puede ver cómo se verá su insignia cuando la...', 'https://www.acreditta.com/Articulos/Acreditado/Compartir_mi_insignia/C-mo-se-vera-mi-insignia-en-Facebook_.pdf'], ['¿Cómo se verá mi insignia en LinkedIn?', 'Tiene dos opciones para compartir en LinkedIn: Newsfeed y Profile...', 'https://www.acreditta.com/Articulos/Acreditado/Compartir_mi_insignia/C-mo-se-vera-mi-insignia-en-LinkedIn_.pdf'], ['¿Por qué Acclaim necesita acceso a mi cuenta de Twitter?', 'Para compartir una insignia en su perfil de Twitter, Twitter requiere un proceso
      de autorización que es obligatorio y estándar para todos los programas de', 'https://www.acreditta.com/Articulos/Acreditado/Compartir_mi_insignia/Por-qu-Acclaim-necesita-acceso-a-mi-cuenta-de-Twitter_.pdf'], ['¿Por qué Acclaim necesita acceso a mi cuenta de LinkedIn?', 'Para compartir o agregar una insignia a su perfil de LinkedIn, LinkedIn requiere
      un proceso de autorización que es obligatorio y estándar para todos los', 'https://www.acreditta.com/Articulos/Acreditado/Compartir_mi_insignia/Por-que-Acclaim-necesita-acceso-a-mi-cuenta-de-LinkedIn_.pdf'], ['¿Puedo adjuntar mi insignia a mi firma de correo electrónico?', 'Sí, agregar una insignia con hipervínculo a su firma de correo electrónico es
      una excelente manera de asegurarse de que su red profesional conozca sus', 'https://www.acreditta.com/Articulos/Acreditado/Compartir_mi_insignia/Puedo-adjuntar-mi-insignia-a-mi-firma-de-correo-electr-nico_.pdf'], ['¿Puedo imprimir mi insignia?', 'Acclaim ofrece una opción para imprimir su credencial desde el Panel de
      control...', 'https://www.acreditta.com/Articulos/Acreditado/Compartir_mi_insignia/Puedo-imprimir-mi-insignia_.pdf'], ['¿Cómo puedo enviar mi expediente de insignias?', 'La plataforma Acclaim ahora le ofrece la capacidad de producir un expediente
      consolidado basado en competencias. Los expedientes incluyen registros de...', 'https://www.acreditta.com/Articulos/Acreditado/Informacion_general/C-mo-puedo-enviar-mi-expediente-de-insignias_.pdf'], ['Me falta una insignia, ¿qué debo hacer?', 'Si espera recibir una insignia de uno de los emisores en la plataforma Acclaim y
      aún no la ha recibido, primero debe asegurarse de que la insignia que se le está...', 'https://www.acreditta.com/Articulos/Acreditado/Informacion_general/Me-falta-una-insignia-que-debo-hacer_.pdf'], ['¿Por qué debería personalizar mi perfil?', 'Su perfil Acclaim es una parte importante para contar su historia profesional.
      Es un lugar en la web donde puede administrar y compartir los logros que', 'https://www.acreditta.com/Articulos/Acreditado/Informacion_general/Por-que-deber-a-personalizar-mi-perfil_.pdf'], ['¿Puedo exportar mi insignia fuera de Acclaim?', 'Sí, al descargar su insignia está contendrá metadatos compatibles con Open
      Badge Infrastructure (OBI) incrustados en la imagen. Acclaim se ha actualizado', 'https://www.acreditta.com/Articulos/Acreditado/Informacion_general/Puedo-exportar-mi-insignia-fuera-de-Acclaim_.pdf'], ['¿Puedo ocultar mi nombre para que no aparezca en mi insignia?', 'Desafortunadamente, esta no es una opción. Los acreditados con insignias
      pueden optar por hacerlas públicas o privadas y también pueden decidir', 'https://www.acreditta.com/Articulos/Acreditado/Informacion_general/Puedo-ocultar-mi-nombre-para-que-no-aparezca-en-mi-insignia_.pdf'], ['¿Qué es Acclaim?', 'Acclaim es una plataforma de acreditación de Acreditta. Acreditta lidera el
      movimiento de credenciales digitales en Latinoamérica, permitiendo que el', 'https://www.acreditta.com/Articulos/Acreditado/Informacion_general/Que-es-Acclaim_.pdf'], ['¿Qué es el Talent Directory?', 'Nos complace anunciar que la plataforma Acclaim de Credly ahora ofrece a las
      organizaciones emisoras un directorio de talentos de sus acreditados para que', 'https://www.acreditta.com/Articulos/Acreditado/Informacion_general/Que-es-el-Talent-Directory_.pdf'], ['¿Qué es una insignia?', 'Una insignia emitida a través de Acclaim es una representación digital de un
      resultado de aprendizaje, experiencia o competencia. Según el estándar Open...', 'https://www.acreditta.com/Articulos/Acreditado/Informacion_general/Que-es-una-insignia_.pdf'], ['¿Qué son las recomendaciones?', 'Las recomendaciones ayudarán a guiarlo a través de los siguientes pasos a seguir para conseguir más oportunidades de insignias. Oportunidades...', 'https://www.acreditta.com/Articulos/Acreditado/Informacion_general/Que-son-las-recomendaciones_.pdf'], ['¿Qué utilidad tiene mostrar mi logro como insignia?', 'Si le han emitido una insignia a través de Acclaim, es porque ha obtenido reconocimiento por un resultado de aprendizaje, credencial, asociación o logro', 'https://www.acreditta.com/Articulos/Acreditado/Informacion_general/Que-utilidad-tiene-mostrar-mi-logro-como-insignia_.pdf'], ['Tengo certificaciones que me gustaría agregar a mi perfil de Acclaim, ¿es posible?', 'Las organizaciones emisoras emiten insignias dentro de la plataforma Acclaim. En este momento no es posible agregar certificados (Importar) a su perfil de...', 'https://www.acreditta.com/Articulos/Acreditado/Informacion_general/Tengo-certificaciones-que-me-gustar-a-agregar-a-mi-perfil-de-Acclaim-es-posible_.pdf'], ['Accidentalmente rechacé mi insignia. ¿Cómo puedo recuperarla?', '¿Rechazó accidentalmente su insignia? Comuníquese con la organización emisora para que vuelva a enviar el correo electrónico de notificación para la...', 'https://www.acreditta.com/Articulos/Acreditado/Mi_Cuenta/Accidentalmente-rechace-mi-insignia-C-mo-puedo-recuperarla_.pdf'], ['¿Cómo elimino mi información de Acclaim?', 'De acuerdo con las regulaciones de GDPR implementadas el 25 de mayo de 2018, los usuarios tendrán la opción de eliminar su cuenta Acclaim y solicitar la...', 'https://www.acreditta.com/Articulos/Acreditado/Mi_Cuenta/C-mo-elimino-mi-informaci-n-de-Acclaim_.pdf'], ['¿Cómo elimino una insignia de mi perfil?', 'Puede eliminar una insignia de su perfil de dos formas...', 'https://www.acreditta.com/Articulos/Acreditado/Mi_Cuenta/C-mo-elimino-una-insignia-de-mi-perfil_.pdf'], ['¿Cómo fusiono mis cuentas?', 'Si tiene varias cuentas en Acclaim con diferentes direcciones de correo electrónico, combine todas sus cuentas en una sola dirección de correo...', 'https://www.acreditta.com/Articulos/Acreditado/Mi_Cuenta/C-mo-fusiono-mis-cuentas_.pdf'], ['¿Cómo puedo administrar mis aplicaciones para compartir?', 'Una vez que conecte sus aplicaciones de redes sociales a su cuenta de Acclaim, podrá administrar esas conexiones directamente en Acclaim. Desde la página','https://www.acreditta.com/Articulos/Acreditado/Mi_Cuenta/C-mo-puedo-administrar-mis-aplicaciones-para-compartir_.pdf'], ['¿Cómo restablezco mi autenticación en dos pasos?', 'A menudo, cuando actualice su dispositivo móvil, deberá restablecer su autenticación de dos pasos. Para restablecer, primero deberá desactivar su...', 'https://www.acreditta.com/Articulos/Acreditado/Mi_Cuenta/C-mo-restablezco-mi-autenticaci-n-en-dos-pasos_.pdf'], ['¿Cómo gestiono mi privacidad?', 'Puede optar por hacer que su perfil de Acclaim y sus insignias individuales sean visibles para el público o sólo para usted. Para administrar su configuración de...', 'https://www.acreditta.com/Articulos/Acreditado/Mi_Cuenta/C-mo-gestiono-mi-privacidad_.pdf'], ['¿Como puedo cambiar mi contraseña?', 'Si olvidó su contraseña...', 'https://www.acreditta.com/Articulos/Acreditado/Mi_Cuenta/Como-puedo-cambiar-mi-contrase-a_.pdf'], ['¿Puedo agregar varios correos electrónicos a mi cuenta Acclaim?', 'Puede agregar fácilmente otras direcciones de correo electrónico a su perfil de Acclaim. Esto le asegurará que todas sus insignias de Acclaim se asignen a su...', 'https://www.acreditta.com/Articulos/Acreditado/Mi_Cuenta/Puedo-agregar-varios-correos-electr-nicos-a-mi-cuenta-Acclaim_.pdf']);

        $videosAcreditado = array(['Dónde puedo compartir mis insignias','https://www.acreditta.com/Tutoriales/Acreditado/D-nde-puedo-compartir-mis-insignias.mp4'], ['Cómo puedo compartir mi insignia en LinkedIn', 'https://www.acreditta.com/Tutoriales/Acreditado/C-mo-puedo-compartir-mi-insignia-en-LinkedIn.mp4'], ['Cómo puedo compartir mi insignia en Twitter', 'https://c-mo-puedo-compartir-mi-insignia-en-twitter.mp4/'], ['Cómo puedo compartir mi insignia en Facebook', 'https://www.acreditta.com/Tutoriales/Acreditado/C-mo-puedo-compartir-mi-insignia-en-Facebook.mp4'], ['Cómo puedo compartir mi insignia por correo electrónico','https://www.acreditta.com/Tutoriales/Acreditado/C-mo-puedo-compartir-mi-insignia-por-correo-electr-nico.mp4'], ['Cómo puedo compartir mi insignia en un blog o página web', 'https://www.acreditta.com/Tutoriales/Acreditado/C-mo-puedo-compartir-mi-insignia-en-un-blog-o-p-gina-web.mp4'], ['Cómo puedo descargar el certificado en PDF de mi insignia', 'https://www.acreditta.com/Tutoriales/Acreditado/C-mo-puedo-descargar-el-certificado-en-PDF-de-mi-insignia.mp4'], ['Cómo puedo publicar mi insignia en Blockchain','https://www.acreditta.com/Tutoriales/Acreditado/C-mo-puedo-publicar-mi-insignia-en-Blockchain.mp4'], ['Cómo puedo colocar mi insignia en la firma de Gmail', 'https://www.acreditta.com/Tutoriales/Acreditado/C-mo-puedo-colocar-mi-insignia-en-la-firma-de-Gmail.mp4'], ['Cómo puedo ver mi perfil de insignias', 'https://www.acreditta.com/Tutoriales/Acreditado/C-mo-puedo-ver-mi-perfil-de-insignias.mp4'], ['Cómo puedo compartir mi expediente de insignias', 'https://www.acreditta.com/Tutoriales/Acreditado/C-mo-puedo-compartir-mi-expediente-de-insignias.mp4'], ['Cómo puedo configurar en mi cuenta de Acclaim', 'https://www.acreditta.com/Tutoriales/Acreditado/C-mo-puedo-configurar-en-mi-cuenta-de-Acclaim.mp4'], ['Cómo puedo cambiar mi clave de acceso a Acclaim', 'https://www.acreditta.com/Tutoriales/Acreditado/C-mo-puedo-cambiar-mi-clave-de-acceso-a-Acclaim.mp4'], ['Cómo puedo vincular mis cuentas en LinkedIn, Facebook y Twitter con mi cuenta de Acclaim', 'https://www.acreditta.com/Tutoriales/Acreditado/C-mo-puedo-vincular-mis-cuentas-en-LinkedIn-Facebook-y-Twitter-con-mi-cuenta-de-Acclaim.mp4'], ['Cómo puedo vincular mis cuentas en LinkedIn, Facebook y Twitter con mi cuenta de Acclaim', 'https://www.acreditta.com/Tutoriales/Acreditado/C-mo-puedo-vincular-mis-cuentas-de-correos-con-mi-cuenta-de-Acclaim.mp4'], ['Cómo puedo buscar quiénes entregan insignias de mi interés en el ecosistema de Acclaim', 'https://www.acreditta.com/Tutoriales/Acreditado/C-mo-puedo-buscar-qui-nes-entregan-insignias-de-mi-inter-s-en-el-ecosistema-de-Acclaim.mp4'], ['Cómo puedo aceptar una insignia', 'https://www.acreditta.com/Tutoriales/Acreditado/C-mo-puedo-aceptar-una-insignia.mp4']);

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
	<div class="pagina-acreditado-container">
		<div class="acreditado-bienvenida-container">
			<div class="acreditado-textos-container">
      <h1 class="acreditado-bienvenida"> Acreditados </h1>
      <p>Bienvenido/a al repositorio de conocimiento para acreditados con insignias digitales, desde aquí podrás acceder a nuestros tutoriales paso a paso y explorar las preguntas frecuentes. Si aún tienes dudas después de revisar nuestro contenido, podrás recibir asistencia contactándote a soporte@acreditta.com.</p>
      </div>
		</div>
    <div>
    <h1 class="pagina-acreditado-subtitulos">Artículos</h1>
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
    <h1 class="pagina-acreditado-subtitulos">Videos tutoriales</h1>
    <div class="articulos-container">
    @foreach ($videosAcreditado as $video)
    <div class="articulo-preview">
      <a href={{$video[1]}} target="_blank">
      <h1>{{$video[0]}}</h1>
      </a>
    </div>
    @endforeach
    </div>
  </div>
    </div>
	</div>

@endsection