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
			include"pages/ContenidoMasajeTerapeutico.php";
			
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
		
		<div class="container-fluid">
			<img alt="" height="50%" width="100%" src="images/03.jpg">
		</div>
			
		<div class="container">

			<div class = "page-handler">
			    
		    </div>
	    	
		    	<div class ="row">
					<div class="col-xs-10 col-xs-offset-2 col1">
						<?php 
			       			$contenidoPrincipal = new ContenidoMasajeTerapeutico();
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