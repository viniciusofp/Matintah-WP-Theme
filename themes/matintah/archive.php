<?php 
/**
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 get_header(); ?>
<div id="fullpage">	
	<div id="artista-header" class="container-fluid" >
		<div class="row">

			<div class="col-sm-12 text-center">

				<h1><span class="chapeu">Feitas sob encomenda</span><br>
				Mais Matintahs</h1>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<div style="max-width: 30%; float: left">
					<?php if (has_post_thumbnail()) {
						the_post_thumbnail();
					}?>
				</div>
				<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				<?php the_content(); ?>

			</div>
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>


<?php get_footer();
