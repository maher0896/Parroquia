<?php
if (isset($_POST["id"])){
}
else { 
   echo '<script language="javascript"> alert("No Has consultado ninguna noticia en nuestro index");</script> ';
   
   $url9="index.php";
	echo '<script language="javascript"> window.location="'.$url9.'"; </script> ';
   
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<?php
		include ("conexion2.php");
		$id=$_POST["id"];
		$consulta="SELECT titulo, resumen, contenido FROM noticias WHERE id='$id'";
		$ejecutar=$con->query($consulta);
	?>
	
    <title>Parroquia - Rese&ntilde;a historica</title>
	<link rel="shortcut icon" href="./img/DOTAlogo.png" type="image/x-icon">

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
	Parroquia La Sagrada Eucarist&iacute;a</div>
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
                <a class="navbar-brand" href="index.html">La Sagrada Eucarist&iacute;a</a>
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
                        <a href="blog.html">Capillas</a>
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
                <!-- <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Notica
                        <strong></strong>
                    </h2>
                    <hr>
                </div>  -->
                <div class="col-md-12">
					<?php
						while ($noticia=$ejecutar->fetch_assoc()){
					?>
					<hr>
					<h1 align="center"> <?php echo($noticia["titulo"]); ?> </h1>
					<hr>
					<br>
					<br>
					<h4 align="center"> <?php echo($noticia["resumen"]); ?> </h4>
					<br>
					<br>
					<p align="center"> <?php echo($noticia["contenido"]); ?></p>
					
					<?php  
						}
					?>
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
