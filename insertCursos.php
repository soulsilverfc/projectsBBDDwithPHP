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
$horario = $_GET['horario'];
$fechaInicio = $_GET['fechaInicio'];
$fechaFin = $_GET['fechaFin'];
$horasTotales = $_GET['horasTotales'];
$profesor = $_GET['profesor'];

$sqlInsertCursos = "INSERT INTO cursos (codigoCurso, nombre, horario, fechaInicio, fechaFin, horasTotales, profesor)
VALUES ('','".$nombre."','".$horario."','".$fechaInicio."','".$fechaFin."','".$horasTotales."','".$profesor."')";

if ($conn->query($sqlInsertCursos) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sqlInsertCursos . "<br>" . $conn->error;
}

$conn->close();

?>