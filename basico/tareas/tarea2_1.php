<?php
$usuario = array(
    'usuario' => 'sabik',
    'contrasenia' => 'Pa$$w0rd53gur151m0', # Obviamente en un desarrollo hay que encriptar esto
    'nombre' => 'Ivan',
    'apellido' => 'Rodriguez',
    'correo' => 'ivan@rodrigu.es'
);

?>
<h1>Datos del usuario</h1>
<?php
print '<p>' . $usuario['usuario'] . '</p>';
print '<p>' . $usuario['contrasenia'] . '</p>';
print '<p>' . $usuario['nombre'] . '</p>';
print '<p>' . $usuario['apellido'] . '</p>';
print '<p>' . $usuario['correo'] . '</p>';
?>
<h1>Encriptación rápida y no muy segura con MD5</h1>
<!-- Funcion predefinida de PHP md5($string) regresa el string encriptado -->
<?= '<p>' . md5($usuario['contrasenia']) . '</p>' ?>

