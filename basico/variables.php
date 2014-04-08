<?php

# Una variable puede tomar muchos valores
$variable_1 = 1.0;
print('<pre>' . var_dump($variable_1) . '</pre>');
$variable_1 = 'Perrito';
print('<pre>' . var_dump($variable_1) . '</pre>');
$variable_1 = array('miau', 'guau', 'oink', 3.1416);
print('<pre>' . var_dump($variable_1) . '</pre>');

# Las variables son case-sensitive
$variable_2 = 1;
$Variable_2 = 2;

print('<p>$variable_2 = ' . $variable_2 . '</p>');
print('<p>$Variable_2 = ' . $Variable_2 . '</p>');

?>

<h3>Pueden ir otras cosas y después seguir usando las variables</h3>

<?php
print('<pre>' . var_dump($variable_1) . '</pre>');
?>

<h3>Podemos forzar la variable a un tipo</h3>

<?php
print('<pre>' . var_dump((int)$variable_1) . '</pre>');
print('<pre>' . var_dump((bool)$variable_1) . '</pre>');
?>

<h3>Podemos imprimir HTML mezclado con variables</h3>

<?php
define('TITULO_LISTA', 'Lista de comidas');
define('TAG_INICIO_LISTA', '<li>');
define('TAG_FIN_LISTA', '</li>');

$elemento1 = 'Pizza';
$elemento2 = 'Burritos';
$elemento3 = 'Lasagna';
print('<h4>' . TITULO_LISTA . '</h4>');
print('<ul>');
print(TAG_INICIO_LISTA . $elemento1 . TAG_FIN_LISTA);
print(TAG_INICIO_LISTA . $elemento2 . TAG_FIN_LISTA);
print('<li>' . $elemento3 . '</li>');
print('</ul>');
?>

<h3>Operaciones con variables</h3>

<?php
$numero_a = 10;
$numero_b = 20;
print("<p>$numero_b + $numero_a = " . ($numero_b + $numero_a) . "</p>");
print("<p>$numero_b - $numero_a = " . ($numero_b - $numero_a) . "</p>");
print("<p>$numero_b / $numero_a = " . ($numero_b / $numero_a) . "</p>");
print("<p>$numero_b % $numero_a = " . ($numero_b % $numero_a) . "</p>");
print("<p>$numero_b % 3 = " . ($numero_b % 3) . "</p>");
?>

<h3>Finalmente, la forma corta de aumentar, disminuir una variable numérica</h3>
<?php
$numero = 10;
print('<p>$numero = ' . $numero . '</p>');
$numero++;
print('<p>$numero = ' . $numero . '</p>');
$numero += 8.5;
print('<p>$numero = ' . $numero . '</p>');
$numero--;
print('<p>$numero = ' . $numero . '</p>');
$numero -= 20.3;
print('<p>$numero = ' . $numero . '</p>');




