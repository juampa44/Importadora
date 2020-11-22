<?

session_start();

if(!isset($_SESSION["user"])){
  header("location:login.php");
}
if($_SESSION["nivel"]=="administrador"){ // relizo la comparacion para saber a q menu de usuario me va direcionar si es NivelUsuario 1 va al pagina inicio administrador
            header("refresh:0.1 ;url=loginadmin.php");
}else{header("refresh:0.1 ;url=loginuser.php"); //si el NivelUsuario es mayor o diferente a 1 va la pagina inicio del usuario normal
}

?>
