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
		$sql="select * from tbl_empleado where empleado_cedula =".$_GET["cedula"];
		$result=mysqli_query($conexion,$sql);
		while($row=mysqli_fetch_assoc($result))
		{
			array_push($datos,array(
				'cedula'=>$row["empleado_cedula"],
				'nombre'=>$row["empleado_nombre"],
				'apellido'=>$row["empleado_apellido1"],
			));
		}
		echo utf8_encode(json_encode($datos));
	}
?>