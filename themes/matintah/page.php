<?php get_header(); ?>
<div id="fullpage">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<div class="spacer"></div>
			<div class="spacer"></div>
			<div class="spacer"></div>
			<div class="spacer"></div>
				<?php 
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); 
						//
						the_content();
						//
					} // end while
				} // end if
				?>			
			</div>
		</div>
	</div>
</div>


<?php get_footer();
