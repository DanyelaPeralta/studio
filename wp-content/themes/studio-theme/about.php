<!-- INCLUDES -->
<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>


 <!--******************* BANNER *******************************-->
<div class="container-fluid">
		<div class="row">
		   <div class="col-md-12 mb-5 mx-auto">
			
				<!-- LOOP DE WORDPRESS -->
				<?php if (have_posts()) : ?>
				<?php query_posts("category_name=ourstudio&showposts=3&order=DESC"); ?>
				<?php while (have_posts()) : the_post(); ?>
				
					<?php the_post_thumbnail('full', array ('class' => 'img-fluid w-100')); ?>
				<?php endwhile; ?> 
				<?php else : ?>  
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			
		  </div><!-- cierre col-md-12-->
		</div><!-- cierre row -->
		
	
		
<!--******************* OUR STUDIO *******************************-->	

	<div class="row">
		<div class="col-md-10 mx-auto my-5">
			
				
				<!-- LOOP DE WORDPRESS -->
				<?php if (have_posts()) : ?>
				<!-- Filtro de categorías -->
				<?php query_posts("category_name=ourstudio&showposts=4&order=DESC"); ?>
				<?php while (have_posts()) : the_post(); ?>
			
				

				<div class="col-md-5 mx-auto text-center">
					
					<h5 class="card-title text-center"><?php the_title();?></h5>
					<p class="card-text"><?php the_content();?></p>
				</div>	

				<?php endwhile; ?> 
				<?php else : ?>  
				<?php endif; ?>
				<?php wp_reset_query(); ?>				
							
				</div><!--cierre col-md-10-->
			</div><!--cierre row-->
		
		
<!--******************* MEMBERS *******************************-->

	<div class="row">
			<div class="col-md-10 mx-auto my-5">
				<div class="row">

					<!-- LOOP DE WORDPRESS -->
					<?php if (have_posts()) : ?>
					<!-- Filtro de categorías -->
					<?php query_posts("category_name=members&showposts=4&order=DESC"); ?>
					<?php while (have_posts()) : the_post(); ?>

					
					<div class="col-md-4 mx-auto text-center">
						<?php the_post_thumbnail('full', array ('class' => 'img-fluid w-30')); ?>
						<h5 class="card-title text-center mt-5"><?php the_title();?></h5>
						<p class="card-text"><?php the_content();?></p>
					</div>

					<?php endwhile; ?> 
					<?php else : ?>  
					<?php endif; ?>
					<?php wp_reset_query(); ?>				

							</div><!--cierre row-->
						</div><!--cierre col-md-10-->

	
					</div><!--cierre row-->

				</div><!--cierre container-fluid-->

	




<?php get_sidebar(); ?> 
<?php get_footer(); ?>