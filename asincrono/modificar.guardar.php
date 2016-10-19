<?php
include('../crud/inc/conexion.php');
$oRespuesta=array();
if ($conexion){

	$sql="UPDATE personas SET "
	."paterno='{$_POST['text-paterno']}',"
	."materno='{$_POST['text-materno']}',"
	."nombres='{$_POST['text-nombres']}' WHERE personas_id={$_POST['id']}";
	
			$resultado=$conexion->query($sql);

			$oRespuesta['success']=TRUE;
		
		}else{
			$oRespuesta['success']=FALSE;

		}
			echo json_encode($oRespuesta);
			?>