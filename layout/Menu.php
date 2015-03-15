<?php

class Menu
{
	function ShowMenu()
	{
		
?>

<div class="navbar navbar-default " role="navigation">
   
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           	
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
               
            </ul>
            <ul class="nav navbar-nav">
            
                <li><a href="index.php">Inicio</a></li>
                 <li>
	                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tratamientos corporales<b class="caret"></b></a>
	                 <ul class="dropdown-menu">
		                 <li><a href="ultracavitacion.php">Ultravacitacion</a></li>
		                 <li><a href="RadioFrecuencia.php">Radio Frecuencia Tripolar</a></li>
		                 <li><a href="electrodos.php">Electrodos</a></li>
		                 <li><a href="presoterapia.php">Presoterapia</a></li>
		                 <li class="divider"></li>
	                 </ul>
                </li>
                
                <li>
	                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Masajes<b class="caret"></b></a>
	                 <ul class="dropdown-menu">
		                 <li><a href="masajeTerapeutico.php">Terapeutico</a></li>
		                 <li><a href="drenajeLinfatico.php">Drenaje Linfatico</a></li>
		                 <li><a href="masajeModelador.php">Modelador</a></li>
		                 <li><a href="plisagge.php">Plisagge</a></li>
		                 <li class="divider"></li>
	                 </ul>
                </li>
                
                <li>
	                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Facial<b class="caret"></b></a>
	                 <ul class="dropdown-menu">
		                 <li><a href="highieneProfunda.php">Higiene Profunda</a></li>
		                 <li><a href="peeling.php">Peeling</a></li>
		                 <li><a href="tratamientoAntiAge.php">Tratamiento anti age</a></li>
		                 <li><a href="puntasDeDiamante.php">Puntas de diamante</a></li>
		                 <li class="divider"></li>
	                 </ul>
                </li>
                <li>
	                 <a href="depilacion.php" class="dropdown-toggle">Depilacion<b ></b></a>
	                 
                </li>
                
                 <li>
	                 <a href="comoEncontrarnos.php" class="dropdown-toggle" >Cont&aacute;ctenos<b ></b></a>
	                 
                </li>
                
                <li>
                
                </li>
             
            </ul>
        </div><!--/.nav-collapse -->
  		
</div>

<?php
	}
	
	
}

?>