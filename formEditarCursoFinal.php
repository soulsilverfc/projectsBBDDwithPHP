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
$idCurso = $_GET['select'];
$sqlCursos = "SELECT * FROM cursos where codigoCurso=".$idCurso."";
$resultCursos = $conn->query($sqlCursos);
?>

<html>
<h2>FORM EDITAR CURSOS</h2>

<h2>EDITAR CURSOS</h2> 
<form action="editarCursos.php" method="get">

<?php
if ($resultCursos->num_rows > 0) {
  while($row = $resultCursos->fetch_assoc()) {
	  echo "<input type='hidden' name='id' value=" . $row["codigoCurso"] . "><br>";
	  echo "NOMBRE: <input type='string' name='nombre' value=" . $row["nombre"] . "><br>";
	  echo "horario: <input type='string' name='horario' value=" . $row["horario"] . "><br>";
	  echo "fechaInicio: <input type='date' name='fechaInicio' value=" . $row["fechaInicio"] . "><br>";
	  echo "fechaFin: <input type='date' name='fechaFin' value=" . $row["fechaFin"] . "><br>";
	  echo "horasTotales: <input type='string' name='horasTotales' value=" . $row["horasTotales"] . "><br>";
	  echo "profesor: <input type='string' name='profesor' value=" . $row["profesor"] . "><br>";
  }
} else {
  echo "0 results";
}
?>

<input type="submit" value="EDITAR">
</form>
</html>