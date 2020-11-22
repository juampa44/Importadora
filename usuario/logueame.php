<?php

session_start();
$connect = mysqli_connect("localhost","juampa22_db","diosamor","juampa22_db");

if(isset($_POST["user"]) && isset($_POST["pass"])){
  $user = mysqli_real_escape_string($connect, $_POST["user"]);
  $pass = mysqli_real_escape_string($connect, $_POST["pass"]);
  $nivel = mysqli_real_escape_string($connect, $_POST["nivel"]);
  $sql = "SELECT * FROM usuario WHERE (user='$user' OR email='$user') AND pass='$pass'";
  $result = mysqli_query($connect, $sql);
  $num_row = mysqli_num_rows($result);
  if ($num_row == "1") {
    $data = mysqli_fetch_array($result);
    $_SESSION["nombre"] = $data["nombre"];
    $_SESSION["apellido"] = $data["apellido"];
    $_SESSION["user"] = $data["user"];
    $_SESSION["nivel"] = $data["nivel"];
include("../coneccion.php");
$user=$_POST['user'];
$pass=$_POST['pass'];
mysqli_query($link, "INSERT INTO iniciousuario(user, pass, dato) VALUES ('$user', '$pass', NOW())");//registra la fecha
    echo "1";
  } else {
    echo "error";
  }
} else {
  echo "error";
}
?>
