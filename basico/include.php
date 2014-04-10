<?php

# ./ directorio actual
# ../ un directorio antes
# ../../ dos directorios antes

include './funciones.php';

print '<p>' . calcula_descuento(1, 2, $mes_actual, 15, 0.25) . '</p>';
saluda();
var_dump($suma);
