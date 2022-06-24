
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta db</title>    
</head>
<body>
    
</body>
</html>


<?php
session_start();
//validamos datos del servidor
$user = "root";
$pass = "1234";
$host = "localhost";
//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);
$usuario = $_POST["usuario"];
//$alumno = $_POST["alumno"];
$contrasenia = $_POST["contrasenia"];
//verificamos la conexion a base datos
$_SESSION['conectado']="falso";
$_SESSION['nombre']="Cursos Online";
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "Conectado" ;
        }
        //indicamos el nombre de la base datos
        $datab = "bdproyecto";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);			
       	$consulta1 = "SELECT * FROM alumno";        	
		$result1 = 	mysqli_query($connection,$consulta1);
		while ($colum = mysqli_fetch_array($result1))
 		{				
    		if((substr_compare($colum['usuario'], $usuario, 0, strlen($nombre))==0) && (substr_compare($colum['contrasenia'], $contrasenia, 0, strlen($contrasenia))==0))
            {
                
                $_SESSION['conectado']="verdad";
                $_SESSION['nombre']=$colum['nombre']." ".$colum['apellido_paterno']." ".$colum['apellido_materno'];			
                header("location:../html/index.php");
				return 'Nombre de usuario repetido';
			}  
              				
		}
        $_SESSION['conectado']="falso";
  header("location:../html/RegistroAlumno.php");
mysqli_close( $connection );
?>

