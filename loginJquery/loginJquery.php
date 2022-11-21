<?php

$usuario = "usa1";
$contra = "con";
if($usuario==$_POST['usuario'])
    echo "<p>Usuario correcto</p>";
else 
    echo "<p>Usuario incorrecto</p>";

    if($contra==$_POST['contra'])
    echo "<p>Contraseña correcta</p>";
else 
    echo "<p>Contraseña incorrecta</p>";
?>
