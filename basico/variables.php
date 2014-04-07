<?php

# Puede tomar muchos valores
$variable_1 = 1.0;
print('<pre>' . var_dump($variable_1) . '</pre>');
$variable_1 = 'Perrito';
print('<pre>' . var_dump($variable_1) . '</pre>');
$variable_1 = array('miau', 'guau', 'oink', 3.1416);
print('<pre>' . var_dump($variable_1) . '</pre>');

# No es lo mismo
$variable_2 = 1;
$Variable_2 = 2;

print('<p>$variable_2 = ' . $variable_2 . '</p>');
print('<p>$Variable_2 = ' . $Variable_2 . '</p>');

?>

<h3>Puede ir otras cosas y después seguir usando las variables</h3>

<?php
print('<pre>' . var_dump($variable_1) . '</pre>');
?>

<h3>Podemos forzar la variable a un tipo</h3>

<?php
print('<pre>' . var_dump((int)$variable_1) . '</pre>');
print('<pre>' . var_dump((bool)$variable_1) . '</pre>');

