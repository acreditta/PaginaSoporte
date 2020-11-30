@extends('layout.home')

<?php
function myfunction($v)
{
if ($v==="Dog")
  {
  return "Fido";
  }
return $v;
}

$a=array("Horse","Dog","Cat");
print_r(array_map("myfunction",$a));
?>

@section('content')
	<div class="container-fluid">
		<div class="row col-12">
			<h1> Hola! ¿Cómo podemos ayudarte? </h1>
		</div>
		<div>
		<div>Acreditados</div>
		<div>Administradores</div>
		</div>
	</div>

@endsection