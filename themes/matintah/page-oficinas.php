<?php 
/**
 * Template Name: Oficinas
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 get_header(); ?>
<div id="fullpage">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
	<div id="artista-header" class="container-fluid" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>')">
		<div class="row">
			<div class="col-sm-6 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<span class="chapeu">saiba mais</span>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-5 col-md-4 col-md-offset-1 col-lg-3 col-lg-offset-2">
				<h1>
					<?php the_title(); ?>
				</h1>
				<button>BAIXE O CURRÍCULO</button>
			</div>
			<div class="col-sm-7 col-md-6 col-lg-5">
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 the-content">
				<?php the_content(); ?>

			</div>
		</div>
	</div>
	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</div>


<?php get_footer();
