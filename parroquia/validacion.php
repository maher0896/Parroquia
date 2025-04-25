<?php
session_start();
?>

<?php

include ("conexion2.php");
$username = $_POST['username'];
$password = md5 ($_POST['password']);


 
$consulta = "SELECT * FROM usuarios WHERE nombre = '$username'";

$ejecutar=$con->query($consulta);


if ($registro=$ejecutar->fetch_assoc()){     
 }

 if ($password == $registro['clave']) { 
 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (360 * 60);

    $url="ver.php";
	echo '<script language="javascript"> window.location="'.$url.'"; </script> ';

 } else { 
   echo '<script language="javascript"> alert("usuario y/o clave incorrectos. Verifique ");</script> ';
   
   $url2="login.php";
	echo '<script language="javascript"> window.location="'.$url2.'"; </script> ';
   
 }
 mysqli_close($con); 
 ?>