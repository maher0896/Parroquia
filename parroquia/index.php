<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<?php
		include ("conexion2.php");
		$consulta="SELECT * FROM noticias";
		$ejecutar=$con->query($consulta);
	?>
	
    <title>La Sagrada Eucaristía</title>
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
			<div class="col-lg-2">
			</div>
                <div class="col-lg-8 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Bienvenid@ a: </small>
                    </h2>
                    <h1 class="brand-name">Parroquia La Sagrada Eucaristía</h1>
                    <hr class="tagline-divider">
                    
                </div>
            </div>
        </div>

        
		
		<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Noticias</strong>
                    </h2>
                    <hr>
                </div>

				<div class="row">
                <div class="col-sm-4 text-center">
                    <?php
						
						$consulta2="select id, titulo, resumen, contenido from noticias order by id desc limit 0,1";
						$ejecutar=$con->query($consulta2);
					
					?>
					<?php
						while ($noticia=$ejecutar->fetch_assoc()){
					?>
				
                    <h3><?php echo ($noticia["titulo"]); ?><br>
                        <small><?php echo ($noticia["resumen"]); ?></small>
                    </h3>
				
							<form name="modificar" action="vernoticia.php" method="post" enctype="application/x-www-form-urlencoded">
								<input type="hidden", name="id", id="id", value=<?php echo $noticia["id"];?>>
								<input class="btn btn-default btn-lg" type="submit", name="ver_mas", id="ver_mas", value="Ver Mas"/>
							</form>
					<?php  
						}
					?>
                </div>
                <div class="col-sm-4 text-center">
                    <?php
						
						$consulta2="select id, titulo, resumen, contenido from noticias order by id desc limit 1,1";
						$ejecutar=$con->query($consulta2);
					
					?>
					<?php
						while ($noticia=$ejecutar->fetch_assoc()){
					?>
                    <h3><?php echo ($noticia["titulo"]); ?><br>
                        <small><?php echo ($noticia["resumen"]); ?></small>
                    </h3>
					
							<form name="modificar" action="vernoticia.php" method="post" enctype="application/x-www-form-urlencoded">
								<input type="hidden", name="id", id="id", value=<?php echo $noticia["id"];?>>
								<input class="btn btn-default btn-lg" type="submit", name="ver_mas", id="ver_mas", value="Ver Mas"/>
							</form>
					<?php  
						}
					?>
                </div>
                <div class="col-sm-4 text-center">
					<?php
						
						$consulta2="select id, titulo, resumen, contenido from noticias order by id desc limit 2,1";
						$ejecutar=$con->query($consulta2);
					
					?>
					<?php
						while ($noticia=$ejecutar->fetch_assoc()){
					?>
                    <h3><?php echo ($noticia["titulo"]); ?> <br>
                        <small><?php echo ($noticia["resumen"]); ?></small>
                    </h3>
					
							<form name="modificar" action="vernoticia.php" method="post" enctype="application/x-www-form-urlencoded">
								<input type="hidden", name="id", id="id", value=<?php echo $noticia["id"];?>>
								<input class="btn btn-default btn-lg" type="submit", name="ver_mas", id="ver_mas", value="Ver Mas"/>
							</form>
					<?php  
						}
					?>
                </div>
				</div>
				<div class="row">
				<div class="col-sm-4 text-center">
                    <?php
						
						$consulta2="select id, titulo, resumen, contenido from noticias order by id desc limit 3,1";
						$ejecutar=$con->query($consulta2);
					
					?>
					<?php
						while ($noticia=$ejecutar->fetch_assoc()){
					?>
                    <h3><?php echo ($noticia["titulo"]); ?><br>
                        <small><?php echo ($noticia["resumen"]); ?></small>
                    </h3>
					
							<form name="modificar" action="vernoticia.php" method="post" enctype="application/x-www-form-urlencoded">
								<input type="hidden", name="id", id="id", value=<?php echo $noticia["id"];?>>
								<input class="btn btn-default btn-lg" type="submit", name="ver_mas", id="ver_mas", value="Ver Mas"/>
							</form>
					<?php  
						}
					?>
                </div>
				
				<div class="col-sm-4 text-center">
                    <?php
						
						$consulta2="select id, titulo, resumen, contenido from noticias order by id desc limit 4,1";
						$ejecutar=$con->query($consulta2);
					
					?>
					<?php
						while ($noticia=$ejecutar->fetch_assoc()){
					?>
                    <h3><?php echo ($noticia["titulo"]); ?><br>
                        <small><?php echo ($noticia["resumen"]); ?></small>
                    </h3>
					
							<form name="modificar" action="vernoticia.php" method="post" enctype="application/x-www-form-urlencoded">
								<input type="hidden", name="id", id="id", value=<?php echo $noticia["id"];?>>
								<input class="btn btn-default btn-lg" type="submit", name="ver_mas", id="ver_mas", value="Ver Mas"/>
							</form>
					<?php  
						}
					?>
                </div>
				
				<div class="col-sm-4 text-center">
                    <?php
						
						$consulta2="select id, titulo, resumen, contenido from noticias order by id desc limit 5,1";
						$ejecutar=$con->query($consulta2);
					
					?>
					<?php
						while ($noticia=$ejecutar->fetch_assoc()){
					?>
                    <h3><?php echo ($noticia["titulo"]); ?><br>
                        <small><?php echo ($noticia["resumen"]); ?></small>
                    </h3>
					
							<form name="modificar" action="vernoticia.php" method="post" enctype="application/x-www-form-urlencoded">
								<input type="hidden", name="id", id="id", value=<?php echo $noticia["id"];?>>
								<input class="btn btn-default btn-lg" type="submit", name="ver_mas", id="ver_mas", value="Ver Mas"/>
							</form>
					<?php  
						}
					?>
                </div>
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
                    <p>Copyright &copy; Maher, Hernán, Natalia, Manuela INTEP 2017</p>
					<!--imagenes con enlaces a las paginas de la diocesis, arquidiocesis, conferencia piscopal de colombia y el vaticano -->
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
