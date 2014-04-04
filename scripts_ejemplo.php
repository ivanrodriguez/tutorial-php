<?php

define('PI', 3.1416);

# 1
$edad = 18;
print($edad);
$nueva_edad = 19;
print($nueva_edad);
$edad = $nueva_edad;
print($edad);

# 2
$num_elefantes = 10;
for($i=1; $i <= $num_elefantes; $i++) {
  echo("$i elefantes se columpiaban sobre la tela de una arania...");
}

# 3
$mes_nacimiento = 03;
$dia_nacimiento = 25;
$anio_nacimiento = 1980;
$legal = FALSE;
if() {
  $legal = TRUE;
}
if($legal == TRUE) {
  print "Puedes fumar, beber y votar";
} else {
  print "A esperar, por cierto PI vale " . PI;
}

# 4
$articulos = array();
$articulos[] = 'Sabritas';
$articulos[] = 'Gansito';
$articulos[] = 'Chocolate';
print "Existen " . count($articulos) . " articulos en tu carrito";
