<head>
  <meta charset="UTF-8">
</head>

<?php
# Funcion que imprima 
function saluda() {
	echo '<h1>Hola</h1>';
	echo '<h1>Adios</h1>';
}
?>
<h1><?php saluda(); ?></h1>

<?php
# Funcion que suma 4 + 4
function suma_4_mas_4() {
	$suma = 4+4;
	return $suma;
}

$suma = suma_4_mas_4();

?>
<h1><?php echo $suma; ?></h1>

<?php
# Funcion que suma dos números
function suma_dos_numeros($numero1, $numero2) {
	$suma = $numero1 + $numero2;
	return $suma;
}

$s58 = suma_dos_numeros(5,8);
var_dump($s58);

$s1015 = suma_dos_numeros(10,15);
var_dump($s1015);

$s55 = suma_dos_numeros(5,5);
var_dump($s55);

$s44 = suma_4_mas_4();
var_dump($s44);

?>
<h1><?php echo $suma; ?></h1>
<?php
# Función para ver si aplica un descuento a un producto

$mes_actual = 4;
print '<p>' . calcula_descuento(3, 5, $mes_actual, 90.50, 0.05) . '</p>';
print '<p>' . calcula_descuento(1, 2, $mes_actual, 15, 0.25) . '</p>';
print '<p>' . calcula_descuento(8, 12, $mes_actual, 20.7, 0.08) . '</p>';
print '<p>' . calcula_descuento(2, 4, $mes_actual, 10000, 0.15) . '</p>';
print '<p>' . calcula_descuento(3, 5, $mes_actual, 978.99, 0.05) . '</p>';


function calcula_descuento($mes_inicio_cupon, $mes_fin_cupon, $mes_actual, $precio, $porcentaje_descuento) {
	if($mes_actual >= $mes_inicio_cupon && $mes_actual <= $mes_fin_cupon) {
		return $precio * $porcentaje_descuento;
	} else {
		return 0.0;
	}
}
