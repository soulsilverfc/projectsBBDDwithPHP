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
echo "TABLA TRABAJADORES<br>";

$sql = "SELECT * FROM trabajadores";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
	  echo "nombre : " . $row["nombre"]. "<br>";
	  echo "dni  : " . $row["dni"]. "<br>";
	  echo "idCurso  : " . $row["idCurso"]. "<br>";
	  echo "fechaInscripcion : " . $row["fechaInscripcion"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();

?>