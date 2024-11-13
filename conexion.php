<?php
$servername = "localhost";
$database = "empresa";
$username = "root";
$password = "";
// crear conexion
$conn = mysqli_connect($servername, $username, $password, $database);
// Checar conexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>

