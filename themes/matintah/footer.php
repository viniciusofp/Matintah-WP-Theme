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
		<div class="col-md-12">
			<h2 class="typed"><span class="element"></span></h2>
			<div class="spacer"></div>
			<div class="spacer"></div>
			<div class="spacer"></div>
		</div>
	</div>
</div>
		
<?php wp_footer(); ?>
<!-- Latest compiled and minified JavaScript -->


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrolly.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/typed.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script async type="text/javascript">

	$('.parallax').scrolly({bgParallax: true});

	var waypoint = new Waypoint({
	  element: $('#fullpage'),
	  handler: function(direction) {
	    $('nav.navbar.homenav').toggleClass('onTop');
	  },
	  offset: 50 
	});

	var lastScrollTop = 0;
	$(window).scroll(function(event){
	   var st = $(this).scrollTop();
	   if (st > lastScrollTop && lastScrollTop > 115){
	       $('nav.navbar').css('margin-top', '-115px');
	   } else {
	       $('nav.navbar').css('margin-top', '0');
	   }
	   lastScrollTop = st;
	});

	$('#fullpage').click(function() {
		$('.collapse').attr('aria-expanded', 'false').removeClass('in');

	})



	$('.mini-cart-trigger, .button.product_type_simple.add_to_cart_button').click(function() {
		// $('#sidebar-cart').css('right', '0px');
		$("body").animate({ scrollTop: 0 }, 0);
		$('#fade').addClass('on');
		$('body').css({
			'height' : '100vh',
			'overflow': 'hidden',
	   		'transform': 'translate3d(-320px,0,0)'
   		});
   		$('#sidebar-cart').css({
   			'transform': 'rotateY(0deg) translate(0,-115px)'
   		});
	});

	$('#mini-cart-close, #fade').click(function() {
		// $('#sidebar-cart').css('right', '-320px');
		$('#fade').removeClass('on');
		$('body').css({
			'height' : 'initial',
			'overflow': 'scroll',
	   		'transform': 'none'
   		});
   		$('#sidebar-cart').css({
   			'transform': 'rotateY(90deg) translate(0,-115px);'
   		});
	});

 	$(function(){
	  $(".element").typed({
	    strings: ["Muito prazer,<br> meu nome é <span style='color: green'>Matintah Pereira</span>."],
	    typeSpeed: 50,
	    startDelay: 300,
        backDelay: 500,
        backSpeed: 36,
	    loop: true
	  });
	});

</script>

</body>
</html>
