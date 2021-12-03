<?php

$servername = "localhost";
$username = "phpuser";
$password = "root";
$dbname = "deber1";
$nombre = $_POST['name'];
$apellido = $_POST['lastname'];
$correo = $_POST['mail'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO nuevatabla (firstname, lastname, email)
    VALUES ('$nombre', '$apellido', '$correo')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Se a creado exitosamente";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
  ?>