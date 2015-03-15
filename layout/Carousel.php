<?php

class Carousel
{
	function showCarousel()
	{
	
	
?>		
  <!-- Bootstrap Carousel -->
          <div id="vaucher" class="carousel slide" data-ride="carousel">

              <!-- Indicators -->
              <ol class="carousel-indicators">
                  <li data-target="#vaucher" data-slide-to="0" class="active"></li>
                  <li data-target="#vaucher" data-slide-to="1"></li>
                  <li data-target="#vaucher" data-slide-to="2"></li>
                  <li data-target="#vaucher" data-slide-to="3"></li>
                  <li data-target="#vaucher" data-slide-to="4"></li>
                  <li data-target="#vaucher" data-slide-to="5"></li>
                  <li data-target="#vaucher" data-slide-to="6"></li>
                  <li data-target="#vaucher" data-slide-to="7"></li>
                  
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                  <div class="item active">
                      <img src="images/01.jpg">
                      <div class="carousel-caption">
                          <h3></h3>
                          <p></p>
                      </div>
                  </div>

                  <div class="item">
                      <img src="images/02.jpg">
                      <div class="carousel-caption">
                          <h3></h3>
                          <p></p>
                      </div>
                  </div>

                  <div class="item">
                      <img src="images/03.jpg">
                      <div class="carousel-caption" >
                          <h3></h3>
                          <p></p>
                      </div>
                  </div>
                  <div class="item">
                      <img src="images/04.jpg">
                      <div class="carousel-caption" >
                          <h3></h3>
                          <p></p>
                      </div>
                  </div>
                  <div class="item">
                      <img src="images/05.jpg">
                      <div class="carousel-caption" >
                          <h3></h3>
                          <p></p>
                      </div>
                  </div>
                  <div class="item">
                      <img src="images/06.jpg">
                      <div class="carousel-caption" >
                          <h3></h3>
                          <p></p>
                      </div>
                  </div>
                  <div class="item">
                      <img src="images/07.jpg">
                      <div class="carousel-caption" >
                          <h3></h3>
                          <p></p>
                      </div>
                  </div>
                  <div class="item">
                      <img src="images/08.jpg">
                      <div class="carousel-caption" >
                          <h3></h3>
                          <p></p>
                      </div>
                  </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#vaucher" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#vaucher" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
          </div>
<?php
	}
}
?>