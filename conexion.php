<?php 
    $bdcon=true;
	$conexion=new mysqli("localhost","id17970593_examen","Dejameusarestepassword17860!","id17970593_dbpm2");
	if($conexion->connect_errno)
	{
		echo "Lo sentimos, este sitio web esta experimentando problemas ".$mysqli -> error;
		//exit;
		$bdcon=false;
	}
	//else echo "Conexion Exitosa";
?>