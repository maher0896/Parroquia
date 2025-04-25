<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
   echo '<script language="javascript"> alert("Necesita auntenticación");</script> ';
   $url4="login.php";
    echo '<script language="javascript"> window.location="'.$url4.'"; </script> ';

exit;
}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();

echo '<script language="javascript"> alert("Se ha agotado el tiempo");</script> ';
$url4="login.php";
    echo '<script language="javascript"> window.location="'.$url4.'"; </script> ';
exit;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<script src="ckeditor/ckeditor.js"></script>
	<script src="ckfinder/ckfinder.js"></script>
	<?php
		include ("conexion2.php");
		$consulta="SELECT * FROM noticias ORDER BY id DESC";
		$ejecutar=$con->query($consulta);
	?>

    <title>Parroquia - Admin</title>
	<link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	
	
</head>

<body>

    <div class="brand"> <img  src="./img/logo.png"  alt="" width="7%"> 
	Parroquia La Sagrada Eucaristía <img  src="./img/escudo-cartago.png"  alt="" width="7%"> </div>
    <div class="address-bar">Morelia | Higueroncito | Roldanillo | Valle del cauca</div>	

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">La Sagrada Eucaristía</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="about.html">Historia</a>
                    </li>
                    <li>
                        <a href="blog.html">capillas</a>
                    </li>
                    <li>
                        <a href="contact.html">Contactenos</a>
                    </li>
					<li><a href="ver.php">Administrador</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
				<div class="col-lg-12">
						<hr>
						<h2 class="intro-text text-center">
							<strong>Vista</strong>
						</h2>
						<hr>
				</div>
					<div class="col-md-12">
						<table border="1px" align="center"> 
							<thead>
								<tr>
									<th> Titulo</th>
									<th> Resumen</th>
									<th> Modificar</th>
									<th> Borrar</th>
								</tr>
							</thead>
							<tbody>

							</tbody>
							<?php
								while ($noticia=$ejecutar->fetch_assoc()){
							?>
								<tr>
									<td> <?php echo ($noticia["titulo"]); ?></td>
									<td> <?php echo ($noticia["resumen"]); ?></td>
									<td> 
										 <form name="modificar" action="actualizar.php" method="post" enctype="application/x-www-form-urlencoded">
											<input type="hidden", name="id", id="id", value=<?php echo $noticia["id"];?>>
											<input class="btn btn-default btn-lg" type="submit", name="modificaar", id="modificar", value="Modificar"/>
										 </form>
									</td>
									<td>
										<form name="eliminar" action="borrar.php" method="post" enctype="application/x-www-form-urlencoded">
											<input type="hidden", name="id", id="id", value=<?php echo $noticia["id"];?>>
											<input class="btn btn-default btn-lg" type="submit", name="eliminar", id="aliminar", value="Eliminar"/>
										 </form>
									</td>
								</tr>
								
							<?php  
							}
							?>
						</table>
						
						<br>
						<br>
						<form name="agregar" action="noticias.php" method="post" enctype="application/x-www-form-urlencoded" align="center" >
							<input class="btn btn-default btn-lg" type="submit", name="agregar", id="agregar", value="AGREGAR"/>
						</form>
						<form name="cerrar" action="logout.php" method="post" enctype="application/x-www-form-urlencoded" align="right" >
							<input class="btn btn-default btn-lg" type="submit", name="cerrar", id="cerrar", value="CERRAR SESIÓN"/>
						</form>
					</div>	
				
			 <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Maher Lopez Rodriguez 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
 
</html> 