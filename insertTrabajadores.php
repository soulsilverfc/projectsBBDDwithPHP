<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "empresa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo "<br><br>";
$nombre = $_GET['nombre'];
$DNI = $_GET['DNI'];
$idCurso = $_GET['select'];
$fechaInscripcion = $_GET['fechaInscripcion'];

$sqlInsertTrabajadores = "INSERT INTO trabajadores (nombre, dni, idCurso, fechaInscripcion)
VALUES ('".$nombre."','".$DNI."','".$idCurso."','".$fechaInscripcion."')";

if ($conn->query($sqlInsertTrabajadores) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sqlInsertTrabajadores . "<br>" . $conn->error;
}

$conn->close();

?>