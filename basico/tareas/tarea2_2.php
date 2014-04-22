<?php
$peliculas_kaurismaki = array(
    'nombre' => 'Películas de Aki Kaurismäki',
    'productos' => array(
        array(
            'nombre' => 'Valehtelija',
            'link_imdb' => 'http://www.imdb.com/title/tt0081701',
            'precio' => 11.8,
            'moneda' => 'EUR'
        ),
        array(
            'nombre' => 'Rikos ja rangaistus',
            'link_imdb' => 'http://www.imdb.com/title/tt0086199',
            'precio' => 12.4,
            'moneda' => 'EUR'
        ),
        array(
            'nombre' => 'Hamlet goes business',
            'link_imdb' => 'http://www.imdb.com/title/tt0093139',
            'precio' => 18,
            'moneda' => 'USD'
        )
    )
);

$peliculas_bergman = array(
    'nombre' => 'Películas de Ingmar Bergman',
    'productos' => array(
        array(
            'nombre' => 'Smultronstället',
            'link_imdb' => 'http://www.imdb.com/title/tt0050986',
            'precio' => 180,
            'moneda' => 'MXP'
        ),
        array(
            'nombre' => 'Scenes from a Marriage',
            'link_imdb' => 'http://www.imdb.com/title/tt0070644',
            'precio' => 17.00,
            'moneda' => 'EUR'
        )
    )
);
?>
	
<h1><?= $peliculas_kaurismaki['nombre']?></h1>
<pre>	
<?= var_dump($peliculas_kaurismaki)?>
</pre>

<h1><?= $peliculas_bergman['nombre']?></h1>
<pre>	
<?= var_dump($peliculas_bergman)?>
</pre>