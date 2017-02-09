<?php
/**
 * The main template file
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
<div id="fullpage">
	
	<section id="home-header" class="container-fluid">
		<div class="row">
			<div class="col-md-12 wrapper">
				<div class="meta">
<!-- 					<h1>Muito prazer, meu nome é Matintah Pereira.</h1>
 -->				</div>
				<div id="triangles" class="parallax" data-velocity=".3" data-fit=""></div>
				<div id="bonecas-1" class="parallax" data-velocity="-.5"></div>
				<div id="fadetriangles" class="parallax"></div>

			</div>
		</div>
	</section>
	<section id="historico" class="container changeNav">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h2>Is there anybody in there?</h2>
				<p>Aside from page background sections you might include this parallax effect for the shock/curiosity value or to create interesting & informative photos. The website for Digital Hands does not use a full parallax layout, but the top image does have a motion-animated parallax effect. Drops of milk in the foreground seem to move faster than milk in the background which corresponds to the general idea of parallax motion.</p>
				<p>You may also like the example found on egopop which is a creative design studio. Again you’ll see a difference in motion between objects closer and further from the viewer’s position. Since every computer monitor is a flat screen the effect is created using the illusion of depth – but this illusion is crucial for any parallax design.</p>
			</div>
		</div>
	</section>
	<section class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h2>Is there anybody in there?</h2>
				<p>Aside from page background sections you might include this parallax effect for the shock/curiosity value or to create interesting & informative photos. The website for Digital Hands does not use a full parallax layout, but the top image does have a motion-animated parallax effect. Drops of milk in the foreground seem to move faster than milk in the background which corresponds to the general idea of parallax motion.</p>
				<p>You may also like the example found on egopop which is a creative design studio. Again you’ll see a difference in motion between objects closer and further from the viewer’s position. Since every computer monitor is a flat screen the effect is created using the illusion of depth – but this illusion is crucial for any parallax design.</p>
			</div>
		</div>
	</section>
	<section class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h2>Is there anybody in there?</h2>
				<p>Aside from page background sections you might include this parallax effect for the shock/curiosity value or to create interesting & informative photos. The website for Digital Hands does not use a full parallax layout, but the top image does have a motion-animated parallax effect. Drops of milk in the foreground seem to move faster than milk in the background which corresponds to the general idea of parallax motion.</p>
				<p>You may also like the example found on egopop which is a creative design studio. Again you’ll see a difference in motion between objects closer and further from the viewer’s position. Since every computer monitor is a flat screen the effect is created using the illusion of depth – but this illusion is crucial for any parallax design.</p>
			</div>
		</div>
	</section>
</div>

<?php get_footer();
