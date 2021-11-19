<?php
include("conexion.php");
	if(!$bdcon)
	{
		echo "Lo sentimos, este sitio web esta experimentando problemas";
		exit;
	}
	else 
	{
			$datos=array();
		$sql="select * from tbl_alumno where alumno_rne =".$_GET["rne"];
		$result=mysqli_query($conexion,$sql);
		while($row=mysqli_fetch_assoc($result))
		{
			array_push($datos,array(
				'rne'=>$row["alumno_rne"],
				'nombre1'=>$row["alumno_nombre1"],
				'nombre2'=>$row["alumno_nombre2"],
				'ape1'=>$row["alumno_ape1"],
				'ape2'=>$row["alumno_ape2"],
				'genero'=>$row["alumno_genero"],
				'fna'=>$row["alumno_fnac"],
			));
		}
		echo utf8_encode(json_encode($datos));
	}
?>