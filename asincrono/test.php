<?php
	$persona['paterno']="Flores";
	$persona['materno']="Apaza";
	$persona['nombres']="Jaime";
	$personas['persona_id']=8;
	//echo json_encode($persona);
	$personas[]=$persona;
	//echo json_encode($personas);
	$personas[]=$persona;
	//echo json_encode($personas);
	$respuesta['cantidad']=2;
	$rspuesta['items']=$personas;
	echo json_encode($respuesta);
	?>
