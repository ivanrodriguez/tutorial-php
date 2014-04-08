<head>
  <meta charset="UTF-8">
</head>
<?php
$nombre = 'Ivan';
$is_autentificado = FALSE;
$grado_estudios = 'Universidad';

# Verificar si el usuario está autentificado, si es así lo saluda y le muestra
# sus materias, si no lo envía a un link para que haga login

if($is_autentificado === TRUE) {
	echo "<h2>Bienvenido(a) $nombre</h2>";
	
	# Mostrar las materias para su año escolar con un SWITCH
	switch($grado_estudios) {
		case 'Primaria': echo 'Las materias de Primaria son ...'; break;
		case 'Secundaria': echo 'Las materias de Secundaria son ...'; break;
		case 'Preparatoria': echo 'Las materias de Preparatoria son ...'; break;
		case 'Universidad': echo 'Las materias de Universidad son ...'; break;
		default: echo 'No pudimos identificar en qué grado estás'; break;
	}
}
else {
	echo "Necesitar autentificarte para ver la lista de materias";
}


