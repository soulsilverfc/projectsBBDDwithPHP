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
$sqlCursos = "SELECT * FROM cursos";
$resultCursos = $conn->query($sqlCursos);
?>
<html>
<h2>QUE CURSO QUIERES MODIFICAR</h2>

<form action="formEditarCursoFinal.php" method="get">

NOMBRE CURSO: 
<select name="select">
<?php
if ($resultCursos->num_rows > 0) {
  while($row = $resultCursos->fetch_assoc()) {
	  echo "<option value=".$row["codigoCurso"].">".$row["nombre"]."</option>";
  }
} else {
  echo "0 results";
}
?>
</select>
<br>

<input type="submit" value="SELECCIONAR ESTE CURSO">
</form>
</html>


<?php
$conn->close();
?>
