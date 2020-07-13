<!-- INCLUDES -->
<?php
/*
Template Name: Work
*/
?>
<?php get_header(); ?>
 <h1>Work</h1>
<!--******************* CARD *******************************-->	
	<div class="row">
		<div class="col-md-10 mx-auto mt-5">
			<div class="row">
				
				<!-- LOOP DE WORDPRESS -->
				<?php if (have_posts()) : ?>
				<!-- Filtro de categorías -->
				<?php query_posts("category_name=work&showposts=4&order=DESC"); ?>
				<?php while (have_posts()) : the_post(); ?>


				<div class="col-md-3">
					
					  
						<?php the_post_thumbnail('full', array ('class' => 'img-fluid w-100')); ?>
						 
					

				</div><!--cierre col-md-3-->

				<?php endwhile; ?> 
				<?php else : ?>  
				<?php endif; ?>
				<?php wp_reset_query(); ?>				
							</div><!--cierre row-->
						</div><!--cierre col-md-11-->
					</div><!--cierre row-->


	
	
			</div><!--cierre container-fluid-->








<?php get_sidebar(); ?> 
<?php get_footer(); ?>