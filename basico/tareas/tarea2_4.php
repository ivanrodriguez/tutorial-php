<?php
$cervezas = array(
    'nombre' => 'Cervezas',
    'articulos' => array(
        array(
            'nombre' => 'Paulaner', # 0
            'precio' => 55.30
        ),
        array(
            'nombre' => 'Becks', # 1
            'precio' => 28.00
        ),
        array(
            'nombre' => 'Pacífico', # 2
            'precio' => 12.50
        ),
        array(
            'nombre' => 'Warsteiner', # 3
            'precio' => 30.50
        )
    )
);

function agregar_articulo($articulo)
{
    global $carrito; # es lo mismo que $GLOBAL['carrito'], es para usar una variable que esta afuera de la funcion
    $carrito[] = $articulo;
}

function calcular_total()
{
    $total = 0.00;
    global $carrito; # es lo mismo que $GLOBAL['carrito'], es para usar una variable que esta afuera de la funcion
    foreach ($carrito as $articulo) {
        $precio = $articulo['precio'];
        $total += $precio;
    }
    return $total;
}
$carrito = array(); # Para poder usar el carrito dentro de las funciones
agregar_articulo($cervezas['articulos'][0]);
agregar_articulo($cervezas['articulos'][0]);
agregar_articulo($cervezas['articulos'][0]);
agregar_articulo($cervezas['articulos'][1]);
agregar_articulo($cervezas['articulos'][1]);
agregar_articulo($cervezas['articulos'][1]);
agregar_articulo($cervezas['articulos'][1]);
agregar_articulo($cervezas['articulos'][3]);
$total = calcular_total();
?>

<h2><?= 'El total es de: $ ' . $total ?></h2>
<h1>Contenido del carrito de compras</h1>
<pre>	
<?= var_dump($carrito)?>
</pre>