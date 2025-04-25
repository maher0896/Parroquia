<?php

session_start();
unset ($_SESSION['username']);
session_destroy();
echo '<script language="javascript"> alert("Se cerró la sesión");</script> ';
$url3="index.php";
echo '<script language="javascript"> window.location="'.$url3.'"; </script> ';

?>