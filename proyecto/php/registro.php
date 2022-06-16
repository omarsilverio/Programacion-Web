
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
$nombre = $_POST["nombre_c"] ;
$usuario = $_POST["nombre_u"] ;
$contraseña = $_POST["passw"] ;

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
        $datab = "bdcursos";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);
		
		
       	$consulta1 = "SELECT * FROM usuario";
        	
		$result1 = 	mysqli_query($connection,$consulta1);


		while ($colum = mysqli_fetch_array($result1))
 		{				
    		if(substr_compare($colum['nombre_u'], $usuario, 0, strlen($nombre))==0){				
				echo'<h1>Nombre de usuario repetido </h1>';
				echo'<br>';
				echo'<a href="index.html"> Volver Atrás</a>';
				return 'Nombre de usuario repetido';
			}    	
			
			//return 'Nombre de usuario repetido';
		}

		echo'<h1>Registros de usuarios</h1>';
			




        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO usuario (nombre_u, nombre_c, passw)
                             VALUES ('$usuario','$nombre','$contraseña')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM usuario";
        
$result = 	mysqli_query($connection,$consulta);
echo "<table>";
echo "<tr>";
echo "<th><h1>Numbre de usuario</th></h1>";
echo "<th><h1>Nombre completo</th></h1>";
echo "<th><h1>Contraseña</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['nombre_u']. "</td></h2>";
    echo "<td><h2>" . $colum['nombre_c'] . "</td></h2>";
    echo "<td><h2>" . $colum['passw'] . "</td></h2>";
    echo "</tr>";
}
echo "</table>";

mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="index.html"> Volver Atrás</a>';


?>
