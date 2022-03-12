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
<h2>FORM INSERT TRABAJADORES</h2>

<h2>INSERT TRABAJADORES</h2> 
<form action="insertTrabajadores.php" method="get">
NOMBRE: <input type="string" name="nombre"><br>
DNI: <input type="string" name="DNI"><br>
ID CURSO: 
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
Fecha Inscripcion: <input type="date" name="fechaInscripcion"><br>
<input type="submit" value="INSERT">
</form>
</html>

<?php
$conn->close();

?>