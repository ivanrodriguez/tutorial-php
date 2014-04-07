<?php
$tres = 4-1;
$variable = array(1, 'dos', $tres, 2*8-12);
# Nos da más info esto que lo anterior
var_dump($variable);
?>

<pre>
<?php
# Poniento los tags <pre> todavía se ve mejor y sirve para ir debuggeando
var_dump($variable);
?>
</pre>

<pre>
<?php
# Con print_r nos da menos info que var_dump
print_r($variable);
?>
</pre>

