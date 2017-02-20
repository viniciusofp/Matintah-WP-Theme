<?php 
/**
 * Template Name: Curriculum
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 get_header(); ?>
<div id="fullpage">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
	<div id="artista-header" class="container-fluid">
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
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h3 class="cv-title">
					<span class="chapeu">contato</span><br>
					Cláudia S. Muller
				</h3>
				<h3 class="cv-title">
					<span class="chapeu">alguns</span><br>
					Prêmios
				</h3>
			</div>
			<div class="col-md-9">
				<h2 class="cv-title">
					<span class="chapeu">algumas</span><br>
					Exposições
				</h2>
				<ul class="widget-cv">
					<?php dynamic_sidebar( 'expo_widget' ); ?>
				</ul>
				<h2 class="cv-title">
					<span class="chapeu">participação em</span><br>
					Eventos
				</h2>
				<ul class="widget-cv">
					<?php dynamic_sidebar( 'eventos_widget' ); ?>
				</ul>
				<h2 class="cv-title">
					<span class="chapeu">algumas</span><br>
					Oficinas
				</h2>
				<ul class="widget-cv">
					<?php dynamic_sidebar( 'oficinas_widget' ); ?>
				</ul>
			</div>
		</div>
	</div>
	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</div>


<?php get_footer();
