<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,
		initial-scale=1">
		<title>Vaucher Centro Estetico-Tratamientos corporales-Masajes-Facial-Depilacion</title>
			<meta name="description" content="Vaucher Centro Estetico-Tratamientos corporales,Masajes,Facial,Depilacion">
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-57331442-1', 'auto');
		  ga('send', 'pageview');

		</script>
    
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/
		respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?php 
			include"layout/Carousel.php";
			include"layout/Head.php";
			include"layout/Menu.php";
			include"layout/Modal.php";
			include"layout/Header.php";
			include"layout/Footer.php";
			include"pages/ContenidoIndex.php";
			include"ContadorVisitas.php";
			
			$head = new Head();
			$head->ShowHead();
		?>
		
		</head>
	<body onload="countDown();">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		
		<div class ="row fondo">
			<nav class="col-md-8 col-sm-12 col-md-offset-3 col-xs-12 fondo">
				
					<?php 
						$menu = new Menu();
						$menu->showMenu();
					?>
			</nav>
			
		</div>
		
		<div class ="row">
		<header class="col-xs-12 col-xs-offset-0 col1">
			<?php 
				$carousel = new Carousel();
				$carousel->showCarousel();					
			?>
		</header>
		
		</div>
		
			
		<div class="container">

			<div class = "page-handler ">
				
		    </div>
		    
		    
				<?php 
					
					
			       $contenidoPrincipal = new ContenidoIndex();
			       $contenidoPrincipal->ShowContenidoIndex();
			    ?>
		</div>
		
		<footer>
			<?php 
					$footer = new Footer();
					$footer->showFooter();
			?>		
			
		</footer>
	         
	</body>
</html>