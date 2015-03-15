<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,
		initial-scale=1">
		<title>Vaucher Centro Estetico</title>

    
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
			
			
			$head = new Head();
			$head->ShowHead();
		?>
		</head>
	<body>
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
		
		<header class="col-xs-12 col-xs-offset-0 col1">
			<?php 
				$carousel = new Carousel();
				$carousel->showCarousel();					
			?>
		</header>
			
		<div class="container">

			<div class = "page-handler">
			    
		    </div>
		    <div class ="alert alert-success col-xs-offset-0 col1">
		    
		    	<h1>Mensaje enviado Correctamente</h1>
		    	<br/>		    	
		    	<a href="index.php" class="btn btn-primary">Volver</a>		    
		    </div>
		    
		</div>
		
		<footer>
			<?php 
					$footer = new Footer();
					$footer->showFooter();
			?>		
			
		</footer>
	         
	</body>
</html>