<?php
/*
 Template Name: Home Page
 *
*/
?>

<?php get_header(); ?>

	<div class="navbar-wrapper">
      <div class="container sliders-faixa">

      		 <div id="myCarousel" class="carousel slide" data-ride="carousel">
	      <!-- Indicators -->
	      <ol class="carousel-indicators">
	        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	        <li data-target="#myCarousel" data-slide-to="1"></li>
	        <li data-target="#myCarousel" data-slide-to="2"></li>
	      </ol>
	      <div class="carousel-inner" role="listbox">
	        <div class="item active">
	          <img height="700" width="100%" class="first-slide" src="<?php echo get_template_directory_uri(); ?>/fix_images/estante_a.jpg" alt="First slide">
	        </div>
	        <div class="item">
	          <img height="700" width="100%" class="second-slide" src="<?php echo get_template_directory_uri(); ?>/fix_images/estante_b.jpg" alt="Second slide">
	        </div>
	        <div class="item">
	          <img height="700" width="100%" class="third-slide" src="<?php echo get_template_directory_uri(); ?>/fix_images/estante_c.jpg" alt="Third slide">
	        </div>
	      </div>
	      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	        <span class="sr-only">Previous</span>
	      </a>
	      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	        <span class="sr-only">Next</span>
	      </a>
	    </div><!-- /.carousel -->


      </div> <!-- containner -->
      	

	  <div class="container marketing-home">
	    <div class="row">

	    	<div class="col-md-6 trabalhos-home">
	    		<div class="ultimos_tabalhos">
	    			<h2>Últimos trabalhos</h2>

	    			<div class="image_ultimo_trabalho">
	    				<img class="third-slide" src="<?php echo get_template_directory_uri(); ?>/fix_images/estante_c.jpg" alt="Third slide">
	    				<p>
	    					Último trabalho realizado. 
	    				</p>
	    				<a>Saiba mais...</a>
	    			</div>

	    		</div>
	    			
	    	</div>

	    	<div class="col-md-6 destaques-home">
	    		<div class="row">
	    			<div class="quem_somos">
	    				<h2 class="" >Quem somos</h2>
	    				<p>
	    					A Perfil Móveis para Loja é uma empresa que trabalha com qualidade artesanal e precisão tecnológica...
	    				</p>
	    				<a>Saiba mais...</a>
	    			</div>

	    			<div class="home_servicos">
	    				<h2>Serviços</h2>
	    				<p>
	    					Confira os serviços que temos disponiveis
	    				</p>
	    				<a>Saiba mais...</a>
	    			</div>

	    		</div>
	    	</div>


	    </div>

	  </div>

    </div> <!-- navbar-wrapper -->




<?php get_footer(); ?>