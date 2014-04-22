<?php include 'header.php'; ?>
<?php
$categoria = $categorias[0]; # Es la categoria de Dulces
$articulos = $categoria['articulos'];
?>
<h2><?= $categoria['nombre'] #<?= es como si fuera <?php print ?></h2>
<?php
foreach($articulos as $articulo){
	print '<p>Nombre: ' . $articulo ['nombre'];
	print '</br>Precio: $' . $articulo ['precio']; 
	print '</br><a href="#">Ver descripcion</a></p>';
	
}
?>
<?php include 'footer.php'; ?>
