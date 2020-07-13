<?php get_header(); ?>

<!--single para mostrar entradas segun ID-->

<div class="container-fuid">
	<div clas="row">
		<div class="col-md-7 mx-auto shadow my-5 py-3">
			
			<div class="row">
				<!-- LOOP DE WORDPRESS -->
				<?php if (have_posts()) : ?>
				<!-- Filtro de categorías -->
				<?php while (have_posts()) : the_post(); ?>


						<div class="col-md-6">
							<?php the_post_thumbnail('full', array ('class' => 'img-fluid w-100')); ?>
							
						</div><!--cierre col-md-6-->




						<div class="col-md-6 py-5 px-5">

							<h2 class="card-title"><?php the_title();?></h2>
							<p class="card-text mt-4"><?php the_content(); ?></p>
							<h1 class="btn btn-outline-dark rounded-pill mt-5"><?php the_field('precio'); ?></h1>
						</div><!--cierre col-md-6-->
					

				<?php endwhile; ?> 
				<?php else : ?>  
				<?php endif; ?>
			</div><!--cierre row-->
		</div><!--col-md-11 mx-auto-->
	</div><!--row-->
</div>




<?php get_sidebar(); ?> 
<?php get_footer(); ?>
