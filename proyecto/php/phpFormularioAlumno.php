
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta db</title>
    <style type="text/css">
     
      table {
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color:lightgray;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }


    </style>
</head>
<body>
    
</body>
</html>


<?php
//validamos datos del servidor
$user = "root";
$pass = "1234";
$host = "localhost";

//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
//$idAlumno = "1234";

  
$nombre = $_POST["nombre"];
$apellido_paterno = $_POST["apellido_paterno"];
$apellido_materno = $_POST["apellido_materno"];
$fehca_nacimiento = $_POST["fehca_nacimiento"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
//$alumno = $_POST["alumno"];
$contrasenia = $_POST["contrasenia"];
$Ccontrasenia = $_POST["Ccontrasenia"];

if(substr_compare($contrasenia ,$Ccontrasenia , 0, strlen($contrasenia),true)!=0){
  echo' contraseñas distintas : ', $contrasenia,'';
  return 'Contrasenñas distintas';
}

//verificamos la conexion a base datos
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
    		if(substr_compare($colum['usuario'], $usuario, 0, strlen($nombre))==0){				
				echo'Nombre de usuario repetido ';
				return 'Nombre de usuario repetido';
			}    	
			
			//return 'Nombre de usuario repetido';
		}



        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
       
		$instruccion_SQL = "INSERT INTO alumno VALUES ('$usuario', '$nombre', '$apellido_paterno', '$apellido_materno', '$fehca_nacimiento','$correo', '$contrasenia')";                                                       
        $resultado = mysqli_query($connection,$instruccion_SQL); 		
        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID   

   //echo "Fuera " ;
   if ($_POST['g-recaptcha-response'] == '') {
    echo "Captcha invalido";
    } else {
        $Destino =$_POST['correo'];;
        $asunto = "Inscripción cursos Gratis Online";
        $Contenido = "Se ha aprovado tu solicitud de inscripción a Cursos Gratis Online";

        mail($Destino,$asunto,$Contenido);
    }
  header("location:../html/RegistroAlumno.php");


mysqli_close( $connection );
?>

