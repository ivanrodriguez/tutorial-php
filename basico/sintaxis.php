<head>
  <meta charset="UTF-8">
</head>

<?php
# Un comentario, el head y meta de arriba son para acentos
echo('<h1>Hola PHP</h1>');

// Por cierto, no es necesario tener un HTML bien formado para que se muestre
echo('<p>No se imprimió el comentario</p>');

/*
  Muchos comentarios
  En varias líneas
*/
echo('<p>Tampoco se imprimió el comentario multilínea</p>');
# Cerramos el tag de PHP porque sigue HTML
?>

<h2>HTML estático sin PHP<h2>
<a href="http://google.com">Con un link estático a Google</a>
<p>
  <?=5+5;?>
</p>

<?php
print('<p>Otra vez PHP</p>');
$variable                                      = 
3;
echo("<h3>En la variable anterior no importan espacios ni saltos de línea, funciona y vale: $variable</h3>");

# Aquí genera un error, pero como es interpretado línea a línea todo lo anterior sí lo hace
echo(no_existe_esto());
# Ya no cerramos el tag de PHP porque termina el doc

echo 'HOLA al final';
