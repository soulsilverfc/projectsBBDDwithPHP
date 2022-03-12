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

$id = $_GET['ID'];
echo 'hashbahba'.$id;
$sqlDeleteCursos = "DELETE FROM cursos WHERE codigoCurso= ('".$id."')";
		if ($conn->query($sqlDeleteCursos) === TRUE) {
		  echo "Record deleted successfully";
		} else {
		  echo "Error deleting record: " . $conn->error;
		}


$conn->close();

?>