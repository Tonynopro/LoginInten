
<?php


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    
    die("No hay conexion: " . mysqli_connect_error());

} 

$name = $_POST["nametxt"];
$pass = $_POST["passwordtxt"];

//INSERT INTO `login` (`usuario`, `password`) VALUES ('Tonynopro', '10022004');

$query = mysqli_query($conn, "INSERT INTO loginusuarios (`usuario`, `password`) VALUES ('" . $name . "', '" . $pass . "')");

if($query){

    header("Location: login.html");
    die();

} else {

    include("registro.html");
    echo "<div class='no'>EL USUARIO YA EXISTE</div>";

}


die();

?>