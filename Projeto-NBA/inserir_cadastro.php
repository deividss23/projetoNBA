<?php

$server = "localhost";
$database = "projetonba";
$user = "root";
$password = "";

$login = $_POST["login"];
$senha = $_POST["senha"];

$conn = mysqli_connect($server, $user, $password, $database);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";

if ($senha != $senha1) {
	echo "gol";
}
 
$sql = "INSERT INTO usuarios (login, senha) VALUES ('$login' , '$senha')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>