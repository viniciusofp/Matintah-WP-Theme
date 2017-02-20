<?php get_header(); ?>
<div id="fullpage" class="scene_element scene_element--fadein">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<?php the_title(); ?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			</div>
		</div>
	</div>
	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</div>


<?php get_footer();
