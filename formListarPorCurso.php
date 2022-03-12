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
?>

<html>
<h2>FORM formListarPorCurso</h2>

<h2>formListarPorCurso</h2> 
<form action="listTrabajadoresPorCurso.php" method="get">
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
<input type="submit" value="LISTAR POR CURSO">
</form>
</html>

<?php
$conn->close();

?>