<!-- INCLUDES -->
<?php
/*
Template Name: Bedroom
*/
?>
<?php get_header(); ?>
 
<!--******************* BEDROOM *******************************-->

<div class="container-fluid">
	<div class="row mt-5">
		<div class="col-md-10 mx-auto mb-5">
			
			<div class="row">
				<div class="col-md-5 mx-auto text-center mb-5">
					<h5>B E D R O O M</h5>
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
				<?php query_posts("category_name=bedroom&showposts=4&order=DESC"); ?>
				<?php while (have_posts()) : the_post(); ?>

						
				<div class="col-md-3 text-center my-5">
						
					<div class="card mb-aling">
						<?php the_post_thumbnail('full', array ('class' => 'img-fluid w-100')); ?>
					</div>
					  	<h4 class="card-title text-center mt-3"><?php the_title();?></h4>
				        <p class="card-text"><?php the_content();?></p>
						
						 
					

				</div><!--cierre col-md-3-->

				<?php endwhile; ?> 
				<div class="paginacion">
				<?php wp_pagenavi(); ?>
			</div>
				<?php else : ?>  
				<?php endif; ?>
				<?php wp_reset_query(); ?>				
							</div><!--cierre row-->
						</div><!--cierre col-md-11-->
					</div><!--cierre row-->



	
	
			</div><!--cierre container-fluid-->







<?php get_sidebar(); ?> 
<?php get_footer(); ?>