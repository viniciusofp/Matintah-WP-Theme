<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!-- POST CONTAINER -->
<div id="post-wrapper" <?php post_class(); ?> ng-controller='DirectiveCtlr'>
<!-- !!! LOOP DO POST !!! -->

	<?php while ( have_posts() ) : the_post();

	$posttags = get_the_tags(); ?>
	<div class="container">
		<div class="row">
		<div id="post-content">

	<!-- CABEÇALHO DO POST -->
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0 col-lg-12 col-lg-offset-0 text-center">
			
				<h6 id="categoria"><?php the_category( ', ' ); ?></h6>
				<h1 id="headline"><?php the_title(); ?></h1>
				<h4 id="linhafina">
					<?php  
				$videoId = get_post_meta($post->ID, 'video-id', true);
				if (has_excerpt( $post->ID )) {
					the_excerpt();
				}
				echo '</h4>';

				if ( empty($videoId) && has_post_format('image',$post->ID) ) : 
					the_post_thumbnail();
				endif; 

				if ( ! empty($videoId) ) : ?>
				<div class="embed-responsive embed-responsive-16by9">
				  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $videoId ?>" frameborder="0" allowfullscreen></iframe>
				</div>
				<?php endif; ?>

				<hr class="divisor">
			</div>

	<!-- CONTEUDO DO POST -->
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-0 col-lg-8 col-lg-offset-0">
				<p id="data">
				<?php 
				if (! empty(get_post_meta($post->ID, 'autor', true))) {
					echo '<span id="autor">' . get_post_meta($post->ID, 'autor', true) . '</span>';
					echo ' | '; 
				}
				the_date(); ?> | 
				<a href="#">Compartilhar</a>
				</p>	

				<?php
				if ( empty( $videoId ) && ! has_post_format('image',$post->ID) && ! has_post_format('quote',$post->ID) ) {
				  if ( has_post_thumbnail() ) { the_post_thumbnail(); } 
				}
				?>

				<?php the_content(); ?>
			
				<h3>Comentários</h3>
			</div>
		<?php endwhile; ?>
		</div>
		<div class="clearfix visible-xs visible-sm"></div>

<!-- BARRA LATERAL -->		

			<div id="post-sidebar" class="col-md-12 col-md-4">
				<h6>Mais recentes</h6>
				<div class="row">

	<!-- LOOP DE POSTS DA BARRA LATERAL -->

					<?php $the_query = new WP_Query( 
						array(
						    'posts_per_page' => 4,
						    'post__not_in' => array( $post->ID ),
						    'orderby' => 'date',
						)
					); 

					function bgClass($bool) {
					    if ( ! $bool ) {
							echo 'box-bg';
						}
					}					
					$count = 0;
					while ($the_query -> have_posts()) : $the_query -> the_post(); 
					?>
					<a href="<?php the_permalink() ?>">
					<div class="col-xs-12 col-sm-6 col-md-12">
						<div class="box <?php bgClass(has_post_thumbnail()); ?>">
							<div class="hidden-sm">
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }  ?>
							</div>
							<h5><?php the_title(); ?></h5>
							<p class=""><?php echo get_excerpt(160); ?></p>
							</div>
					</div>
					</a>
					<?php 
					if ($count % 2 != 0) {
						echo '<div class="clearfix"></div>';
					}
					$count ++;
					endwhile;
					?>
				</div>
				<div class="row">

<!-- BOX DE NEWSLETTER -->
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div id="newsletter-box" class="">
							<h5>Assine a Newsletter</h5>
							<div class="form-group">
							    <input type="text" class="form-control" id="inputGroupSuccess2" aria-describedby="inputGroupSuccess2Status">
							    <button class="btn btn-default">
							      	Inscreva-se
							    </button>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
				<h6>Mais a respeito</h6>

					<?php
					$the_query2 = new WP_Query( 
						array(
						    'posts_per_page' => 4,
						    'post__not_in' => array( $post->ID ),
						    'orderby' => 'date',
						    'tag_id__and' => $posttags

						)
					); 				
					$count = 0;
					while ($the_query2 -> have_posts()) : $the_query2 -> the_post(); 
					?>
					<a href="<?php the_permalink() ?>">
					<div class="col-xs-12 col-sm-6 col-md-12">
						<div style="border: none; padding: 0" class="box2 <?php bgClass(has_post_thumbnail()); ?>">
							<h4><?php $count ++; echo $count . '. ';?>
							<small><?php the_title(); ?></small>
							</h4>

						</div>
					</div>
					</a>
					<?php 
					endwhile;
					wp_reset_postdata();
					?>

				</div>
			</div><!--  sidebar col end -->

		</div><!--  row end -->
	</div><!--  container end -->
</div><!--  post wrapper end -->

<small id='theThumbnail' style="display: none">
	<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }  ?>
</small>
<script type="text/javascript">
	$('.wp-caption').attr('style', '')
</script>

<?php get_footer();
