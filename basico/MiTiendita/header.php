<?php include 'categorias.php'; ?>
<html>
	<head>
		<title>Mi tiendita</title>
	</head>
	<body>
		<h1>Mi tiendita</h1>
	<?php
	foreach($categorias as $categoria) {
		print '<h3><a href="#">'. $categoria['nombre'].'</a></h3>';}
	?>
	<h3>Carrito de compra</h3>
