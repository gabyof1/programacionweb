<?php 

if(!isset($_SESSION))
session_start();
$_SESSION['nombre']="Jaimito";
echo "<p> desde sesiones_origen.php </p>";
echo "<p> hola".$_SESSION['nombre']."</p>";
echo "<a href='sesiones_destino.php'> ir a sesiones_destino.php</a>";
?>