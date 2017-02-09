<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div id="footer-bar" class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div>
				<p class="text-center">This is my footer</p>
			</div>	
		</div>
	</div>
</div>
		

<?php wp_footer(); ?>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="/wp-content/themes/matintah/js/jquery.scrolly.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script type="text/javascript">
	$('.parallax').scrolly({bgParallax: true});

	var waypoint = new Waypoint({
	  element: $('#fullpage'),
	  handler: function(direction) {
	    $('nav.navbar').toggleClass('onTop');
	  },
	  offset: -50 
	})
</script>

</body>
</html>
