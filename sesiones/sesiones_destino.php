<?php 
if(!isset($_SESSION))
session_start();
echo "<p> desde sesiones_destino.php </p>";
echo "<p> hola".$_SESSION['nombre']."</p>";
echo "<a href='sesiones_origen.php'> volver  a sesiones_origen.php</a>";
?>