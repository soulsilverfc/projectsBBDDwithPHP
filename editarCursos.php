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

$codigoCurso = $_GET['id'];
$nombre = $_GET['nombre'];
$horario = $_GET['horario'];
$fechaInicio = $_GET['fechaInicio'];
$fechaFin = $_GET['fechaFin'];
$horasTotales = $_GET['horasTotales'];
$profesor = $_GET['profesor'];


$sqlDeleteCursos = "UPDATE cursos SET nombre = '".$nombre."', horario= '".$horario."', fechaInicio= '".$fechaInicio."', fechaFin= '".$fechaFin."', horasTotales= '".$horasTotales."', profesor= '".$profesor."' WHERE codigoCurso = ('".$codigoCurso."')";
		if ($conn->query($sqlDeleteCursos) === TRUE) {
		  echo "Record deleted successfully";
		} else {
		  echo "Error deleting record: " . $conn->error;
		}


$conn->close();

?>