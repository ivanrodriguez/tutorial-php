<?php

# For simple
print "<h2>La tabla del 2</h2>";
for($multiplicador = 1; $multiplicador <= 10; $multiplicador ++) {
	print "<p>2 x $multiplicador = " . (2 * $multiplicador) . "</p>";
}

# Imprime los días de la semana con un switch
for($dia_semana = 1; $dia_semana <= 7; $dia_semana ++) {
	
	print "<p>Hoy es $nombre_dia!</p>";
}
	



# No se tiene que llamar forzosamente $i, ni tiene que incrementar en 1
print "<h2>Lista de dos en dos</h2>";
print "<ul>";
for($elemento_lista = 1; $elemento_lista <= 10; $elemento_lista += 2) {
	print "<li>$elemento_lista</li>";
}
print "<ul>";
