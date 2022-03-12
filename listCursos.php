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

echo "<br><br>";
echo "TABLA CURSOS<br>";
$sqlCursos = "SELECT * FROM cursos";
$resultCursos = $conn->query($sqlCursos);

if ($resultCursos->num_rows > 0) {
  while($row = $resultCursos->fetch_assoc()) {
	  echo "codigoCurso  : " . $row["codigoCurso"]. "<br>";
	  echo "nombre  : " . $row["nombre"]. "<br>";
	  echo "horario  : " . $row["horario"]. "<br>";
	  echo "fechaInicio : " . $row["fechaInicio"]. "<br>";
	  echo "fechaFin : " . $row["fechaFin"]. "<br>";
	  echo "horasTotales : " . $row["horasTotales"]. "<br>";
	  echo "profesor : " . $row["profesor"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();

?>