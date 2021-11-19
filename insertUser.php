<?php 
	include("conexion.php");
	if(!$bdcon)
	{
		echo "Lo sentimos, este sitio web esta experimentando problemas";
		exit;
	}
	else 
	{
		$user=$_POST["nombre"];
		$pass=$_POST["clave"];
		$consulta="insert into tbl_user values('".$user."','".$pass."','ACTIVO')";
		if(mysqli_query($conexion,$consulta))
		{
			echo "1";
		}
		else 
		{
		    echo "0";
		}
	}
?>