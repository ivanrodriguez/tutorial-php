<?php
# Definimos un string con "" o con ''
$string = "Mi string";
$string2 = 'es un texto';

# Cuando ponemos dentro de "" una variable, la pone con el string
echo "<p>$string $string2</p>";

# Si no, podemos concatenar textos y variable con 'texto' . $var . 'texto'
print '<p>' . $string . ' ' . $string2 . '</p>';

# Para ver que con '' no lo pone
print '<p>' . $string . ' ' . '$string2' . '</p>';
print '<p>' . $string . ' ' . "$string2" . '</p>';

# Para agregar a un string
$string2 .= ' al que le agregamos más texto';
print("<p>$string2</p>");

# PHP detecta el tipo de dato aunque definamos como string
$numero = 2;
$numero2 = '2';
print("<p>$numero + $numero2 = " . ($numero + $numero2) . "</p>");
