<!-- INCLUDES -->
<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

<!--******************* MAPA *******************************-->	
			
	
	<div class="container-fluid">
		<div class="row">
		   <div class="col-md-12 mb-5">
			
				<!-- LOOP DE WORDPRESS -->
				<?php if (have_posts()) : ?>
				<!-- Filtro de categorías -->
				<?php query_posts("category_name=contact&showposts=3&order=DESC"); ?>
				<?php while (have_posts()) : the_post(); ?>

				
				
					<div class="embed-responsive embed-responsive-16by9 iframe-alto">
						<?php the_field ('mapa'); ?> 
					</div>
				
				<?php endwhile; ?> 
				<?php else : ?>  
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			
		  </div><!-- cierre col-md-12-->
		</div><!-- cierre row -->
		
		
<!--******************* CONTACTO Y FORMULARIO *******************************-->	
			
				
		<div class="row">
			<div class="col-md-10 mx-auto my-5">	
				<div class="row">
					<!-- LOOP DE WORDPRESS -->
					<?php if (have_posts()) : ?>
					<!-- Filtro de categorías -->
					<?php query_posts("category_name=contact&showposts=3&order=DESC"); ?>
					<?php while (have_posts()) : the_post(); ?>


					<div class="col-md-6 mt-3">
						<h5><?php the_title(); ?></h5>
						<p><?php the_content(); ?></p>
					</div>


					<div class="col-md-6">
						<?php the_field ('formulario') ?> 
						
					</div>
						
					
				
					<?php endwhile; ?> 
					<?php else : ?>  
					<?php endif; ?>
					<?php wp_reset_query(); ?>	
					
				</div>
			</div><!-- cierre col-md-10 -->			
		</div><!-- cierre row -->
	</div><!-- cierre conteiner-fluid -->



<?php get_sidebar(); ?> 
<?php get_footer(); ?>