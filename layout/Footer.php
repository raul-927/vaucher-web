<?php
class Footer
{
	function showFooter()
	{
?>
	<div class="container">
		<div class = "row">
		
			<div class="col-md-4 col-sm-6 col-xs-12">
				
					<h3>Direccion:</h3>
					<small>
					 	Secco Garc&iacute;a Manzana F, Solar 8 (Ciudad de la costa, Lagomar)
					</small>
				
					<h3>Telefono:</h3>
				<small>
						091-020-020, 094-237-451
				</small>
				
				
<!-- 					<h3>Mail:</h3> -->
<!-- 				<small> -->
<!-- 					<a href="mailto:info@vaucher.com.uy">info@vaucher.com.uy</a> -->
<!-- 				</small> -->
<!-- 				<br /><br /> -->
				<!-- inicio codigo contador -->
<!-- 					<div> -->
<!-- 						<a href="#">Eres el visitante n&uacute;mero:</a> -->
<!-- 					<br/> -->
<!--  						<img style="border: 0px solid ; display: inline;" alt="contador de visitas" -->
<!--         					src="http://contador-de-visitas.com/hit.php?id=2080598&counter=24">	 -->
<!-- 					<br /><br /> -->
<!-- 					</div> -->
				<!-- fin codigo contador -->
			</div>
			
			<div class="col-md-4 col-sm-6 col-xs-12">
				<a href ="https://www.facebook.com/estetica.vaucher?fref=ts" class="btn btn-social-icon btn-sm btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-sm']);">
			    	<i class="fa fa-facebook"></i>
			    </a>
<!--  			    <a class ="btn btn-social-icon btn-sm btn-twitter" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-sm']);"> -->
<!-- 			    	<i class ="fa fa-twitter"></i> -->
<!-- 			    </a> -->
<!--  			    <a class ="btn btn-social-icon btn-sm btn-google-plus" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-sm']);"> -->
<!-- 			    	<i class ="fa fa-google-plus"></i> -->
<!-- 			    </a> -->
			    
<!--  			    <a class ="btn btn-social-icon btn-sm btn-linkedin" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-sm']);"> -->
<!-- 			    	<i class ="fa fa-linkedin"></i> -->
<!-- 			    </a> -->
			</div>
			<br/>
<!-- 			<div class="col-md-4 col-sm-6 col-xs-12"> -->
			
				
	         
				<?php 
				
// 					$visitas = new ContadorVisitas();
// 					$array = $visitas->contador();
						
// 					echo "<h4> &Uacute;ltimo Mes Visitado: $array[0]</h4> ";
// 					echo"<br/>";
// 					echo "<h4>Cantidad de Visitas del Mes: $array[1]</h4>";
// 					echo"<br/>";
// 					echo "<h4>Total de Visitas:            $array[2]</h4>";
				
// 				?>
            	
            	
<!-- 			</div> -->
			<div class="col-xs-12 col-md-6 col-lg-6">
				<form method = "POST" action ="contacto.php" onsubmit="return Validar(this);" class="form-horizontal input-sm">
					<fieldset>
						<legend><h3>Cont&aacute;ctenos</h3></legend>
					</fieldset>
					<div class="form-group">
						<label for="nameField" class="col-xs-2">Nombre</label>
						<div class="col-xs-8">
							<input type="text" size="8" class="form-control" name ="nameField" id="nameField" placeholder="Ingrese su nombre" />
						</div>
					</div>  
					<div class="form-group">
						<label for="emailField" class="col-xs-2">Email</label>
						<div class="col-xs-8">
							<input type="email" class="form-control" name ="emailField" id="emailField" placeholder="Ingrese su Mail" />
						</div>
					</div>	    
					
					
					<div class="form-group">
						<label for="subjectField" class="col-xs-2">Asunto</label>
						<div class="col-xs-8">
							<input type="text" class="form-control" name ="subjectField" id="subjectField" placeholder="Ingrese Asunto" />
						</div>
					</div>  
					
					<div class="form-group">
						<label for="descField" class="col-xs-2">Mensaje</label>
						<div class="col-xs-8">
							<textarea type="text" class="form-control" name ="messageField" id="messageField" placeholder="Dejenos su mensage"></textarea>
						</div>
			    	</div>
						    	
					<div class="col-xs-10 col-xs-offset-2">
						<button type="submit" name ="submit" class="btn btn-primary">Enviar</button> <button type="reset" class="btn btn-default">Cancelar</button>
					</div>
						    	
				</form>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-6">
			
				
				
			</div>
			<span>&copy; Centro Estetico Vaucher Todos los derechos reservados</span>
		
		</div>
		
	</div>
<?php
	}
}
?>