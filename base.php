<?<?php 
// conectar al servidor
$conectar=mysql_connect('localhost', 'root', '') ;

if (!$conectar){
	echo "no se puedo concetar con el servidor";
}else{
	$base = mysql_select_db('odontologia');
	if(!$base){
		echo "no se encontro la base de datos";
	}
}
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$tipo_de_cita=$_POST['tipo_de_cita'];
$hora_fecha=$_POST['hora_fecha'];

$sql="INSERT INTO datos VALUES('$nombre',
                                   '$cedula',
                                   '$tipo_de_cita',
                                   '$hora_fecha')";
$ejecutar=mysql_query($sql);
// verificamos la ejecucion
if(!$ejecutar){
    echo"Hubo Algun Error";
}else{
    echo"Datos Guardados Correctamente <br> <a href='index.html'> Volver </a>";
}

 ?>