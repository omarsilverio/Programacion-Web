
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
  echo'<a href="../html/RegistroAlumno.php">  contraseñas distintas  ', $contrasenia,'</a>';
  return 'Contrasenñas distintas';
}

//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>Conectado</h3></b>" ;
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
				echo'<h1>Nombre de usuario repetido </h1>';
				echo'<br>';
				echo'<a href="Programacion-Web/proyecto/html/RegistroAlumno.php"> Volver Atrás</a>';
				return 'Nombre de usuario repetido';
			}    	
			
			//return 'Nombre de usuario repetido';
		}

		echo'<h1>Registros de alumno</h1>';
			




        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
       
		$instruccion_SQL = "INSERT INTO alumno VALUES ('$usuario', '$nombre', '$apellido_paterno', '$apellido_materno', '$fehca_nacimiento','$correo', '$contrasenia')";                                                       
        $resultado = mysqli_query($connection,$instruccion_SQL); 		
        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID   



   //echo "Fuera " ;
   echo'<a href="index.php"> Registro exitoso</a>';

   $sql="SELECT * FROM alumno";

   $resultado=mysqli_query($connection,$sql);


?>
<table border="1">
  <thead >
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">localidad</th>
      <th scope="col">Marca</th>
      <th scope="col">Descripcion</th>
    </tr>
  </thead>
  <tbody>
  <?php
// Ejecucion del bucle Foreach con MySQL
foreach($resultado as $k) {


?>
<tr>
      
      <td><?php echo $k["usuario"]; ?></td>
      <td><?php echo $k["nombre"]; ?></td>
      <td><?php echo $k["apellido_paterno"]; ?></td>
      <td><?php echo $k["localidad"]; ?></td>
      <td><?php echo $k["marca"]; ?></td>
      <td><?php echo $k["descripcion"]; ?></td>
    </tr>
    
<?php
mysqli_close( $connection );
}
?>

