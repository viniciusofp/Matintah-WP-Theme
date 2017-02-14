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
<div id="fullpage" class="scene_element scene_element--fadein">
	
	<section id="home-header" class="container-fluid">
		<div class="row">
			<div class="col-md-12 wrapper">
				<div class="meta">
<!-- 					<h1>Muito prazer, meu nome é Matintah Pereira.</h1>
 -->				</div>
				<div id="triangles" class="parallax" data-velocity=".3" data-fit=""></div>
				<div id="bonecas-1" class="parallax" data-velocity="-0.1"></div>
				<div id="fadetriangles" class="parallax"></div>

			</div>
		</div>
	</section>
	<section id="historico" class="container">
		<div class="row">
			<div class="col-md-12">
				<?php 
				$args = array('pagename' => 'abayomi');
				// the query
				$the_query = new WP_Query( $args ); ?>

				<?php if ( $the_query->have_posts() ) : ?>

					<!-- pagination here -->

					<!-- the loop -->
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<h2><?php the_title(); ?></h2>

						<?php the_post_thumbnail(); echo '<p><br></p>'; the_content(); ?>
					<?php endwhile; ?>
					<!-- end of the loop -->

					<!-- pagination here -->

					<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<section class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 340.5 538.5" style="enable-background:new 0 0 340.5 538.5;" xml:space="preserve">
<style type="text/css">
	.st0{display:none;}
	.st1{fill-rule:evenodd;clip-rule:evenodd;fill:#3AAF74;}
	.st2{fill-rule:evenodd;clip-rule:evenodd;fill:#D62E16;}
	.st3{fill-rule:evenodd;clip-rule:evenodd;fill:#302D7E;}
	.st4{fill-rule:evenodd;clip-rule:evenodd;fill:#11448E;}
	.st5{fill-rule:evenodd;clip-rule:evenodd;fill:#FEEB17;}
	.st6{fill-rule:evenodd;clip-rule:evenodd;fill:#E20717;}
	.st7{fill-rule:evenodd;clip-rule:evenodd;fill:#EF7E08;}
	.st8{fill-rule:evenodd;clip-rule:evenodd;fill:#010202;}
</style>
<g id="Camada_1" class="st0">
</g>
<g id="Camada_19">
	<path id="XMLID_602_" class="st1" d="M42.5,148.7l14,7.6c-0.4-6.9-3.4-13.2-4.1-20.2c2.4-0.7,3.8-1.8,5.1-3.7l23,28.5
		c-1.5,1.6-4.2,5.3-6.2,5.5l0.3,0.8c4.2,2.2,8,4.6,12.1,7l8.8,5c0.3,0.1,1.3,0.6,1.6,0.8c1.6,0.9,0.8,0.3,1.7,1.1l0.7,1.6
		c0.3,3.4-0.3,1.2,2.3,3.4c1.5,1.3,1.8,2.3,2.9,3.2c2.5,2.1,6.5,2,9.5,3.5l-2,12.3l-0.8,4.2c-0.8,4.8,5.8,9,6.4,14.8
		c0.5,4.6,0.9,15,0.6,19.5c0.6,0.7,0.8-0.8,0.1,2c1.9,2.4,6.7,21.3,7.9,25.4l7.7,24.6c0.1-0.1,0.2,0.3,0.3,0.5
		c-0.2,4.6,5.7,18.8,6.6,25.2l19-10.6c3-2.4,3.1-7.7,5.5-10.9c1.7-2.2,7.6-3.6,9.9-5.3l1.1-14.2c1.2-2.9,5.2-8.4,4.9-10.6
		c3.1-1.4,8.6-13.2,10.3-16.2l9-16.1l0,0L42.5,148.7L42.5,148.7z M171.2,203.1c-1.2,0-1.9,0.1-3.9,0.2L171.2,203.1L171.2,203.1z
		 M200.9,237.5L42.5,148.7c-1-2.7,3.9-21.6,5.2-26.1c1.1-4.1,3.9-5.5,6.4-7.9l35.5-34.3c7.7,0.6,15,4.1,24,4.6
		c7.5,0.5,15.7,0.6,23,1.6l1.7,12.7c-2.4-1.1-1.8-1-3.1-1.6c-1.1-0.5-2.5-1.1-3.8-1.7c-5.7-2.7-20.4-10.3-24.3-10.4
		c-0.9,11-2,20.9-4,31.1c6.7,1.3,35.3-1.7,46.4-2.2c4.1-0.2,4.4,0.5,6.5-1.4l1.5,0.6c-0.6,2.1-1.1,0.6,2.8,5.1
		c3.9,4.6,10.4,13.3,14.1,14.9c3.3-3.5,12.4-11.6,14.6-15.1c-6.3-3.9-25.3-3.1-31.5-5.5l7.4-6c5.6,1.7,13.4,5.8,19,8.4
		c8.3,3.8,13.1,2.7,21.8,4.1l0.4,3.1c0.8,24.6-9.2-5.4,3,35.7c2.5,8.3,14.5,31.9,14.3,33.9l0.2,1.2l-27.1-4
		c-1,4.8,2.1,27.2,2.8,35.1c0.2,2.1,0.4,4.4,0.5,6c0,0,0.2,2.8,0.2,2.8c0.9,2.3-1.9,2.5,2.1,1.8l-0.2,0.9l-0.3-0.2L200.9,237.5z"/>
</g>
<g id="Camada_18">
	<path id="XMLID_600_" class="st2" d="M156.1,113.2l-17.8-13.8c-2.4-1.1-1.8-1-3.1-1.6c-1.1-0.5-2.5-1.1-3.8-1.7
		c-5.7-2.7-20.4-10.3-24.3-10.4c-0.9,11-2,20.9-4,31.1c6.7,1.3,35.3-1.7,46.4-2.2C153.7,114.4,153.9,115.1,156.1,113.2z"/>
</g>
<g id="Camada_17">
	<path id="XMLID_599_" class="st3" d="M112.8,292l-0.3,1c5.1,2,15.7,1.9,21.9,3.1c-0.1-0.2-0.2-0.6-0.3-0.5l-7.7-24.6
		c-1.2-4.2-6-23-7.9-25.4L112.8,292z"/>
</g>
<g id="Camada_16">
	<path id="XMLID_598_" class="st4" d="M56.5,156.3l0.2,0.6l17.5,9.5c2-0.2,4.6-3.9,6.2-5.5l-23-28.5c-1.3,1.9-2.7,3-5.1,3.7
		C53.2,143.1,56.1,149.4,56.5,156.3z"/>
</g>
<g id="Camada_15">
	<path id="XMLID_597_" class="st4" d="M157.7,113.2l-0.1,0.6c-0.6,2.1-1.1,0.6,2.8,5.1c3.9,4.6,10.4,13.3,14.1,14.9
		c3.3-3.5,12.4-11.6,14.6-15.1C182.9,114.8,163.9,115.5,157.7,113.2z"/>
</g>
<g id="Camada_14">
	<path id="XMLID_575_" class="st5" d="M62.2,180.9c7.1,0.6,23.8-1.2,29,0.4c1.5-0.7,1-0.5,3.2-0.6c2.8-0.1,1.6-0.2,4.4,0.4
		c-0.9-0.8-0.1-0.3-1.7-1.1c-0.3-0.2-1.3-0.6-1.6-0.8l-8.8-5c-4.1-2.4-7.9-4.8-12.1-7c-1.6,2.5-4.1,4.9-6,6.9
		C66.2,176.8,64.6,178.4,62.2,180.9z"/>
</g>
<g id="Camada_13">
	<path id="XMLID_568_" class="st5" d="M61,181.3c7.1,0.6,23.8-1.2,29,0.4c1.5-0.7,1-0.5,3.2-0.6c2.8-0.1,1.6-0.2,4.4,0.4
		c-0.9-0.8-0.1-0.3-1.7-1.1c-0.3-0.2-1.3-0.6-1.6-0.8l-8.8-5c-4.1-2.4-7.9-4.8-12.1-7c-1.6,2.5-4.1,4.9-6,6.9
		C65,177.2,63.4,178.8,61,181.3z"/>
</g>
<g id="Camada_12">
	<path id="XMLID_567_" class="st6" d="M112.8,292l5.8-46.4c0.7-2.9,0.4-1.3-0.1-2c-1.3,2.8-4.8,7.5-6.7,10.1
		c-3.5,4.7-2.3,5.6-1.7,11.8C110.5,270.4,111.3,289.2,112.8,292z"/>
</g>
<g id="Camada_11">
	<path id="XMLID_566_" class="st2" d="M61.2,179l1,1.9c2.4-2.5,4-4.1,6.4-6.7c1.9-2.1,4.4-4.5,6-6.9l-0.3-0.8L56.7,157
		C57.8,163.9,61.1,172.9,61.2,179z"/>
</g>
<g id="Camada_10">
	<path id="XMLID_565_" class="st5" d="M61.2,179c-0.1-6.1-3.4-15.1-4.5-22l-0.2-0.6l-14-7.6c1.8,3.1,2.8,4.9,4.4,7.7L61.2,179z"/>
</g>
<g id="Camada_9">
	<polygon id="XMLID_609_" class="st5" points="198.5,237 192.9,185.1 225.1,193.1 201.8,237.3 	"/>
</g>
<g id="Camada_8">
	<path id="XMLID_608_" class="st6" d="M181.4,269.8c0.3,2.3-3.7,7.7-4.9,10.6l17.6-7.8c2.3-1.1,4-1.1,4.5-3.6
		c1.9-9.5,0.5-23.6,3.1-33l-10,17.7C190.1,256.6,184.5,268.4,181.4,269.8z"/>
</g>
<g id="Camada_7">
	<path id="XMLID_607_" class="st4" d="M192.5,146.2c2.8-2.9,7.5-7.1,10.2-10.7c-0.7-4-1.5-8.4-4-10.7c-4-3.5-6.4-6-9.9-5.9l2.1,20.3
		c0.1,1.3,0.1,2.1,0.3,3.3L192.5,146.2z"/>
</g>
<g id="Camada_6">
	<path id="XMLID_606_" class="st7" d="M202.3,235.2l-0.2,0.9l24.6-15.2c6.4-3.8,5.4-2.9,10.4-10.5c2.8-4.4,6.9-9.5,9-14l-22.3-4.1
		l0.2,1.2L202.3,235.2z"/>
</g>
<g id="Camada_5">
	<path id="XMLID_90_" class="st2" d="M138.7,321.1c-0.9-3.3-10-11.9-12.6-14.5c-2.5-2.5-4-4.2-6.5-6.8c-2.1-2.3-4.7-5.3-7.1-7.1
		l3.2,26.6L138.7,321.1z"/>
</g>
<g id="Camada_4">
	<path id="XMLID_96_" class="st4" d="M191.7,145.9c2.9-2.9,7.7-7,10.5-10.5c-0.6-4.1-1.3-8.5-3.8-10.8c-4-3.7-6.3-6.2-9.8-6.2
		l1.7,20.5c0.1,1.3,0.1,2.1,0.2,3.3L191.7,145.9z"/>
</g>
<g id="Camada_3">
	<g id="XMLID_614_">
		<path id="XMLID_616_" class="st8" d="M180.7,329.8c7.8-13.6,22.7-30.8,51.2-49.2c21.9-14.2,35.2-32.4,39.7-54.1
			c-2.2-4-4.7-7.7-7.7-10.8c-4.1-4.2-7.5-8.5-11.3-12.2c-1.7,9-4.2,19.2-7.9,29c-1.3,3.5-2.8,6.9-4.4,10.2c-0.8,1.6-1.7,3.3-2.5,4.8
			c-0.9,1.6-1.8,3.1-2.7,4.6c-1.9,2.9-3.8,5.7-5.8,8.2c-2,2.5-4,4.7-6,6.6c-1,0.9-2,1.8-2.9,2.7c-1,0.8-1.9,1.5-2.8,2.2
			c-0.8,0.7-1.7,1.3-2.5,1.8c-0.8,0.5-1.5,1-2.2,1.5c-1.3,0.8-2.4,1.4-3.1,1.8c-0.7,0.4-1.1,0.6-1.1,0.6s0.3-0.3,1-0.9
			c0.6-0.6,1.5-1.4,2.7-2.4c0.5-0.6,1.1-1.2,1.8-1.8c0.6-0.7,1.3-1.4,2-2.2c0.7-0.8,1.4-1.7,2.1-2.6c0.7-1,1.4-2,2.1-3.1
			c1.4-2.2,2.8-4.6,4.1-7.2c1.3-2.6,2.5-5.5,3.6-8.5c0.5-1.5,1-3.1,1.5-4.6c0.4-1.6,0.9-3.2,1.3-4.8c0.7-3.3,1.4-6.6,1.9-9.9
			c0.5-3.3,0.8-6.7,1.1-10.1c0.2-3.3,0.4-6.6,0.4-9.8c0-2.9,0-5.6-0.1-8.3c-6.8,3.9-15.3,8.9-14.9,9.5c0,0-4.1,62.9-46.7,69.1
			c0,0-3.1,20.2-2.7,20.6c0.4,0.5,2.1,3,2.9,4.7C176.9,313.3,179.4,322.6,180.7,329.8z"/>
		<path id="XMLID_615_" class="st8" d="M299.7,317c2.3-2.6,5.8-6.3,3.7-9.5c-1.3-3.8-6.6-2.9-5.9-5.6c10.4-8.6,3-14.5-9.9-23.7
			c-0.1-2.4-0.1-4.7-0.2-7.1c-1.2-0.7-2.4-1.4-3.6-2.1l-0.9-2.7c-0.2-1.8-1.7-15.6-6.9-29.5c-5.3,16.2-16.7,34.5-40.4,49.9
			c-35.5,23-48.7,43.8-53.6,56.9c0,0-19.8,56.6,30.9,104.9c0.3-1.3,0.4-1.5,0.3-1.7c-6.5-13.1-18.5-77,15.4-95.4
			c4.9-2.6,8.6-5.8,14-4.6c3.7,0.9,7.4,1.9,11.1,2.9c27,11,43.8,9.5,41.2-15.7c0.9-4.3,8.5-3.4,8.9-8.5
			C304.2,321.3,303.5,318,299.7,317z"/>
	</g>
</g>
<g id="Camada_2">
	<g id="XMLID_610_">
		<g id="XMLID_611_">
			<g id="XMLID_612_">
				<path id="XMLID_613_" class="st5" d="M210.2,304.3l-13.5,36.5c-0.9,2.3,0.8,4.8,3.3,4.9l17.7,0.4c2.2,0.1,4-1.9,3.7-4.1
					c-1.2-8-5.2-23.2-6.5-29.4c-0.4-2-0.9-4.2-1.2-5.7c0,0-0.5-2.6-0.6-2.7c-0.8-1.5,0.3-2.2-0.3-2.1
					C211.5,302.3,210.6,303.2,210.2,304.3z"/>
			</g>
		</g>
	</g>
</g>
</svg>

			</div>
		</div>
	</section>
	<section class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">

			
				<h1>Arte <span style="color: red" class="element"></span></h1>
				<p>Aside from page background sections you might include this parallax effect for the shock/curiosity value or to create interesting & informative photos. The website for Digital Hands does not use a full parallax layout, but the top image does have a motion-animated parallax effect. Drops of milk in the foreground seem to move faster than milk in the background which corresponds to the general idea of parallax motion.</p>
				<p>You may also like the example found on egopop which is a creative design studio. Again you’ll see a difference in motion between objects closer and further from the viewer’s position. Since every computer monitor is a flat screen the effect is created using the illusion of depth – but this illusion is crucial for any parallax design.</p>
			</div>
		</div>
	</section>
</div>

<?php get_footer();
