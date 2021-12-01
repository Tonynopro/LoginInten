<?php
session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    
    die("No hay conexion: " . mysqli_connect_error());

} 

$name = $_POST["txtUsuario"];
$pass = $_POST["txtPassword"];

$query = mysqli_query($conn, "SELECT * FROM loginusuarios WHERE usuario = '" . $name . "' and password = '" . $pass . "'");
$nr = mysqli_num_rows($query);

if($nr == 1){

    $_SESSION['User'] = $name;
    header("Location: Menu.php");
    

} else if($nr == 0) {

    include("login.html");
    echo "<div class='no'>ERROR EN LA AUTENTIFICACION</div>";

}

mysqli_close($conn);

?>