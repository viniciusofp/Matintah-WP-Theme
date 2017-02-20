<?php
/**
 * Template Name: Home
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<div id="fullpage" class="scene_element scene_element--fadein">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
	<div id="home-header" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>')">
		<section  class="container">
			<div class="row">
				<div class="col-sm-6">
					<h1>
						<span class="chapeu">abayomis</span><br>
						<?php the_title(); ?>
					</h1>
					<p><?php the_content(); ?></p>
				</div>
				<div class="col-sm-6 text-center">
					<div class="spacer hidden-xs"></div>
					<div class="spacer hidden-xs"></div>
					<div class="spacer hidden-xs"></div>
					<button>MONTE A SUA!</button>
					<button>OFICINAS</button>
					<a href="/artista"><button>ARTISTA</button></a>
				</div>
			</div>
		</section>	
	</div>
	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
	<?php
	// QUERY AROMA
	$args = array('pagename' => 'essencia-amazonica');
	$the_query = new WP_Query( $args ); 
	if ( $the_query->have_posts() ) while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<div id="aromas" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>'">
		<section class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="meta">
						<h2>
							<span class="chapeu">sustentável</span><br>
							<?php the_title(); ?>
						</h2>
						<p><?php the_content(); ?></p>
					</div>
				</div>
			</div>
		</section>
	</div>
	<?php endwhile; wp_reset_postdata(); ?>
	<?php
	// QUERY AROMA
	$args = array('pagename' => 'amuletos-e-amarras');
	$the_query = new WP_Query( $args ); 
	if ( $the_query->have_posts() ) while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<div id="amuletos" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>'">
		<section class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<div class="meta">
						<h2>
							<span class="chapeu">tradição</span><br>
							<?php the_title(); ?>
						</h2>
						<p><?php the_content(); ?></p>
					</div>
				</div>
			</div>
		</section>
	</div>
	<?php endwhile; wp_reset_postdata(); ?>
	<section id="section" class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="meta">
					<h2 class="text-center">
						Arte Sustentável<br>
						<span class="chapeu">Cultura que resiste</span>
					</h2>
				</div>
			</div>
		</div>
	</section>
	<section class="container-fluid">
		<?php if ( is_active_sidebar( 'front_page_widget_area_1' ) ) : ?>
			<div id="front_page_widget" class="row" role="complementary">
				<?php dynamic_sidebar( 'front_page_widget_area_1' ); ?>
			</div><!-- #primary-sidebar -->
		<?php endif; ?>
	</section>
</div>

<?php get_footer();
