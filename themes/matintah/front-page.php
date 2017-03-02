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
<div id="fullpage" class="home scene_element scene_element--fadein">
<!-- 	TRIANGLES PARALLAX -->
	<div id="triangles" class="parallax" data-velocity="-1.5"></div>

	<?php 
	// QUERY HOME
	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
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
					<a href="/loja"><button>MONTE A SUA!</button></a>
					<a href="/oficinas"><button>OFICINAS</button></a>
					<a href="/artista"><button>ARTISTA</button></a>
				</div>
			</div>
		</section>	
	</div>
	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
	<?php
	// QUERY ESSENCIA AMAZONICA
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
	// QUERY AMULETOS E AMARRAS
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
	<section id="section" class="container-fluid">
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
	<?php
	// QUERY ARTISTA
	$args = array('pagename' => 'artista');
	$the_query = new WP_Query( $args ); 
	if ( $the_query->have_posts() ) while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<div id="artista">
		<section class="container-fluid">
			<div class="row">
				<div class="col-sm-6"   style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>'); background-position: center; background-size: cover">
					<div style="opacity: 0; min-height: 840px;">
						<p>Artesã e arte-educadora, Cláudia Müller expôs suas Matintas em museus e bens culturais do Brasil e de Portugal. A artista oferece ainda oficinas de bonecas artesanais e atende clientes como SESC, SEBRAE, SUTACO e a Casa do Zezinho.Artesã e arte-educadora</p>

					</div>

				</div>
				<div class="col-sm-4 col-sm-offset-1">
					<object id="my-svg" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/img/adorno-06-08.svg"></object>


					<h2>
						<span class="chapeu">conheça</span><br>
						<?php the_title(); ?>
					</h2>
					<?php the_content(); ?>
					<div class="spacer"></div>
					<a href="/artista"><button>SAIBA MAIS</button></a>
					<div class="spacer"></div>
					<div class="spacer"></div>
					<object style="transform: rotate(180deg)" id="my-svg2" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/img/adorno-06-08.svg"></object>

				</div>
			</div>
		</section>
	<?php endwhile; wp_reset_postdata(); ?>
	</div>
	<section id="insta_widget" class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="spacer"></div>
				<a target="_blank" href="https://www.instagram.com/matintahpereira"><h2><i style="color:#ef8225; margin-bottom: 15px;" class="fa fa-instagram" aria-hidden="true"></i><br>@matintahpereira</h2></a>
				<div class="spacer"></div>
			</div>
		</div>
		<?php if ( is_active_sidebar( 'front_page_widget_area_1' ) ) : ?>
			<div id="front_page_widget" class="row" role="complementary">
				<?php dynamic_sidebar( 'front_page_widget_area_1' ); ?>
			</div><!-- #primary-sidebar -->
		<?php endif; ?>
	</section>
</div>

<?php get_footer();
