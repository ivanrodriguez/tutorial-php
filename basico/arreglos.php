<head>
  <meta charset="UTF-8">
</head>

<?php
# Arreglos guardan muchos elementos

$arreglo = array(1, 2, 3, 4, 5);

print '<pre>';
var_dump($arreglo);
print '</pre>';

$arreglo = array('leonardo', 'miguel angel', 'donatello');

print '<pre>';
var_dump($arreglo);
print '</pre>';

$arreglo = array(3, 'tristes', 'tigres', 2, 1);

print '<pre>';
var_dump($arreglo);
print '</pre>';

$arreglo = array(
			array(50, 100, 1000),
			array('blanco azulado', 'blanco agrisado', 'blanco ablancado'),
			array(1500, 'mil quinientos'),
			array(1)
			);
			
print '<pre>';
var_dump($arreglo);
print '</pre>';

# Arreglos con índice numérico

$arreglo_indice = array();
$arreglo_indice[] = 'Valor de la posición cero'; # Posición 0
$arreglo_indice[] = 'Valor de la posición uno'; # Posición 1
$arreglo_indice[2] = 'Valor de la posición dos'; # Posición 2
$arreglo_indice[3] = 'Valor de la posición tres'; # Posición 3
$arreglo_indice[] = 'Valor de la posición cuatro'; # Posición 4

print '<pre>';
var_dump($arreglo_indice);
print '</pre>';

# Arreglos con índice (key) asociativo

$arreglo_asociativo = array();
$arreglo_asociativo['sku'] = 11298743; 
$arreglo_asociativo['nombre'] = 'Gansito'; 
$arreglo_asociativo['categoria'] = 'Pastelitos'; 

print '<pre>';
var_dump($arreglo_asociativo);
print '</pre>';

# Otra forma
$arreglo_asociativo = array(
							'sku' => 11298744,
							'nombre' => 'Chocotorro',
							'categoria' => 'Pastelitos'
);

print '<pre>';
var_dump($arreglo_asociativo);
print '</pre>';

# Recorrer un arreglo, si no vamos a usar la posición del índice
for($i=0; $i < count($arreglo_indice); $i++) {
	print "<p>$arreglo_indice[$i] de un arreglo con for / índices</p>";
}

# Otra forma de recorrer un arreglo
foreach($arreglo_asociativo as $elemento) {
	print "<p>$elemento de un arreglo con foreach as</p>";
}
