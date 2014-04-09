<head>
  <meta charset="UTF-8">
</head>

<?php
# For simple
print "<h2>La tabla del 2</h2>";
for($multiplicador = 1; $multiplicador <= 10; $multiplicador ++) {
	print "<p>2 x $multiplicador = " . (2 * $multiplicador) . "</p>";
}

# Imprime los días de la semana con un switch
print "<h2>Los días de la semana por número</h2>";
for($dia_semana = 1; $dia_semana <= 7; $dia_semana ++) {
	$nombre_dia = ''; # No es necesario inicializar pero a muchos les gusta
	switch($dia_semana) {
		case 1: $nombre_dia = "Lunes"; break;
		case 2: $nombre_dia = "Martes"; break;
		case 3: $nombre_dia = "Miércoles"; break;
		case 4: $nombre_dia = "Jueves"; break;
		case 5: $nombre_dia = "Viernes"; break;
		case 6: $nombre_dia = "Sábado"; break;
		case 7: $nombre_dia = "Domingo"; break;
		default: $nombre_dia = "No es un número de día válido"; break;
	}
	print "<p>Hoy es $nombre_dia!</p>";
}
	



# No se tiene que llamar forzosamente $i, ni tiene que incrementar en 1
print "<h2>Lista de dos en dos</h2>";
print "<ul>";
for($elemento_lista = 1; $elemento_lista <= 10; $elemento_lista += 2) {
	print "<li>$elemento_lista</li>";
}
print "<ul>";
