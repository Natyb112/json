<?php
$servername = "localhost";
$username = "phpuser";
$password = "root";
$dbname = "deber1";

//Se creara una conexion que ira dirextamente al servidor.
$conexion=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password );
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$resultado = "SELECT * FROM nuevatabla";
$result = $conexion->prepare($resultado);
$result->execute();
$objeto = array();

// Creacion de un Array
while ($row = $result->fetch(PDO::FETCH_ASSOC)){ 
    $objeto ['Todos los usuarios'][] = $row;
}
echo json_encode($objeto);
?>
<br><br> 

<!DOCTYPE html>
<html>
    <body> 
    <a href="index.html" >Volver</a>
    </body>
</html>







