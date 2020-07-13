<!-- INCLUDES -->
<?php
/*
Template Name: Inicio
*/
?>
 <!--******************* SLIDER *******************************-->
<?php get_header(); ?>
 <?php echo do_shortcode('[smartslider3 slider=3]');?>
<div class="container-fluid">
		
<!--******************* CATEGORIA HOME *******************************-->	
		<div class="row shadow pb-5">
			<div class="col-md-10 mx-auto">
				
				<div class="row">
					<div class="col-md-5 mx-auto text-center my-5">
						<h5> I N T E R I O R S</h5>
					<div class="row">
						<div class="col-md-1 mx-auto">
							<div class="border-bottom border-dark"></div>
						</div>	
					</div>	
					</div>
				</div>
				
				
				<div class="row">

					<!-- LOOP DE WORDPRESS -->
					<?php if (have_posts()) : ?>
					<!-- Filtro de categorías -->
					<?php query_posts("category_name=home&showposts=4&order=DESC"); ?>
					<?php while (have_posts()) : the_post(); ?>


					<div class="col-md-3">
						  <div class="card mb-aling">
								<?php the_post_thumbnail('full', array ('class' => 'img-fluid w-100')); ?>

							<div class="card-img-overlay">
								<button type="button" class="btn btn-outline-light mb-b rounded-pill" href="<?php the_permalink(); ?>">R E A D  -  M O R E</button>
							</div>
						  </div>
					</div><!--cierre col-md-3-->

					<?php endwhile; ?> 
					<?php else : ?>  
					<?php endif; ?>
					<?php wp_reset_query(); ?>				
				</div><!--cierre row-->
			</div><!--cierre col-md-10-->
		</div><!--cierre row-->
	
<!--******************* CATEGORIA OUR  *******************************-->

		<div class="row">
			<div class="col-md-10 mx-auto my-5 py-5">
				<div class="row">

					<!-- LOOP DE WORDPRESS -->
					<?php if (have_posts()) : ?>
					<!-- Filtro de categorías -->
					<?php query_posts("category_name=our&showposts=1&order=DESC"); ?>
					<?php while (have_posts()) : the_post(); ?>


					<div class="col-md-4 mx-auto text-center">
						  <h5 class="card-title text-center text-separacion"><?php the_title();?></h5>
						<div class="row">
							<div class="col-md-1 mx-auto">
								<div class="border-bottom border-dark"></div>
							</div>	
						</div>	
						  <p class="card-text"><?php the_content();?></p>
					</div>
				 
			
			

					<?php endwhile; ?> 
					<?php else : ?>  
					<?php endif; ?>
					<?php wp_reset_query(); ?>				
				 </div>
			   </div>
			</div>
		
<!--******************* CATEGORIA ICONS  *******************************-->
	
	
	<div class="row pb-5 bg_icons">
			<div class="col-md-7 mx-auto mt-5">
			<div class="row">

					<!-- LOOP DE WORDPRESS -->
					<?php if (have_posts()) : ?>
					<!-- Filtro de categorías -->
					<?php query_posts("category_name=icons&showposts=3&order=DESC"); ?>
					<?php while (have_posts()) : the_post(); ?>


					<div class="col-md-4 text-center text-white pl-5">
						 
						<?php the_post_thumbnail('full', array ('class' => 'img-fluid w-50')); ?>
						  <h5 class="card-title text-center"><?php the_title();?></h5>
						  <p class="card-text"><?php the_content();?></p>
							
						 
					</div><!--cierre col-md-3-->

					<?php endwhile; ?> 
					<?php else : ?>  
					<?php endif; ?>
					<?php wp_reset_query(); ?>				
				</div><!--cierre row-->
			</div><!--cierre col-md-9-->
		</div><!--cierre row-->
	
	
<!--******************* CATEGORIA trending  *******************************-->
	
	
	<div class="row pb-5">
			<div class="col-md-9 mx-auto mt-5">
				
				<div class="row">
					<div class="col-md-5 mx-auto text-center my-5">
						<h5> T R E N D I N G</h5>
					<div class="row">
						<div class="col-md-1 mx-auto">
							<div class="border-bottom border-dark"></div>
						</div>	
					</div>	
					</div>
				</div>
				
			<div class="row mt-5">

					<!-- LOOP DE WORDPRESS -->
					<?php if (have_posts()) : ?>
					<!-- Filtro de categorías -->
					<?php query_posts("category_name=trending&showposts=6&order=DESC"); ?>
					<?php while (have_posts()) : the_post(); ?>


					<div class="col-md-2 text-center">
						<div class="card mb-aling">
						<?php the_post_thumbnail('full', array ('class' => 'img-fluid w-100')); ?>
						</div>
						
						  <h4 class="card-title text-center mt-3"><?php the_title();?></h4>
						  <p class="card-text">
						  <?php the_excerpt();?></p>
						
						  <a class="text-dark text_font" href="<?php the_permalink(); ?>" rel="">read more</a>
							
						
						 
					</div><!--cierre col-md-3-->

					<?php endwhile; ?> 
					<?php else : ?>  
					<?php endif; ?>
					<?php wp_reset_query(); ?>				
				</div><!--cierre row-->
			</div><!--cierre col-md-9-->
		</div><!--cierre row-->	
	
	
	
	
			</div><!--cierre container-fluid-->








<?php get_sidebar(); ?> 
<?php get_footer(); ?>