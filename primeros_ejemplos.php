<?php

define('TASA_ISR', 0.28);

# 1
$edad = 18;
print('La variable edad: ' . $edad);
print('</br>');
$nueva_edad = 19;
print('La variable con la nueva edad: ' . $nueva_edad);
print('</br>');
$edad = $nueva_edad;
print('La variable edad con la nueva edad asignada: ' . $edad);

# 2
$num_elefantes = 10;
for($i=1; $i <= $num_elefantes; $i++) {
  echo("<p>$i elefantes se columpiaban sobre la tela de una arania...</p>");
}

# 3
$anio_nacimiento = 1980;
$legal = FALSE;

# Esto está mal pero sirve como intro a un código PHP
$edad = 2015 - $anio_nacimiento;
if($edad >= 18) {
  $legal = TRUE;
}
if($legal == TRUE) {
  print "<p>Puedes fumar, beber y votar</p>";
} else {
  print "<p>A esperar, por cierto la tasa de ISR es del " . PI * 100 . "%</p>";
}

# 4
$articulos = array();
$articulos[] = 'Sabritas';
$articulos[] = 'Gansito';
$articulos[] = 'Chocolate';
print "<p>Existen " . count($articulos) . " articulos en tu carrito</p>";
