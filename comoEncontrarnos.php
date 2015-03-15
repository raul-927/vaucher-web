<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,
		initial-scale=1">
		<title>Vaucher Centro Estetico</title>
		<?php 
			include"layout/Carousel.php";
			include"layout/Head.php";
			include"layout/Menu.php";
			include"layout/Modal.php";
			include"layout/Header.php";
			include"layout/Footer.php";
			include"pages/ContenidoComoEncontrarnos.php";
			
			$head = new Head();
			$head->ShowHead();
		?>
		</head>
	<body>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		
		<nav class="col-md-10  col-lg-offset-0 col-xs-12 fondo">
			<div class="col-md-12 col-lg-12 col-md-offset-3 col1  fondo">
				<?php 
					$menu = new Menu();
					$menu->showMenu();
				?>
				
			</div>
		</nav>
		
		<div id ="map" class=" col-xs-12 col-xs-offset-0 col0 container-fluid">
			
		</div>
			
		<div class="container">

			<div class = "page-handler">
			    
		    </div>
	    	
		    	<div class ="row">
					<div class="col-xs-10 col-xs-offset-2 col1">
						<?php 
			       $contenidoPrincipal = new ContenidoComoEncontrarnos();
			       $contenidoPrincipal->ShowContenidoPrincipal();
			    ?>
					</div>
		    	</div>
	        
	    	
		</div>
		<footer>
			<div>
				<?php 
					$footer = new Footer();
					$footer->showFooter();
				?>			
			</div>
		</footer>
	         
	</body>
</html>