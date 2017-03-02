<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
<div id="fullpage" class="shop scene_element scene_element--fadein text-center">
<!-- 	<div id="shop-header">
		
	</div> -->

	<div id="main-shop" class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
						
					<?php
					if (is_shop()) : ?>

						<h1 class="page-title">
							<span class="chapeu">Monte sua Matintah</span><br>
							Escolha suas raízes
						</h1>
						<p>Primeiro você decide como será o estilo e a história de sua boneca.</p>

					<?php 
					elseif (is_product_category()) : ?>
						<h5 id="bread" >Você escolheu a raíz <span style="color: #fff"><?php woocommerce_page_title(); ?></span><br><br><a href="/loja"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</a></h5>
						<h1 class="page-title">
							<span class="chapeu">Monte sua Matintah</span><br>
							Escolha um suporte
						</h1>
						<p>Agora defina o tamanho e estrutura de sua boneca. <br class="hidden-xs">Com exceção da tradicional, todas se sustentam em pé.</p>
					<?php
					endif; 
					//woocommerce_page_title();
					?> 
					
				<?php endif; ?>
				<?php
				if (false) {
					/**
					 * woocommerce_before_main_content hook.
					 *
					 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
					 * @hooked woocommerce_breadcrumb - 20
					 */
					do_action( 'woocommerce_before_main_content' );
				}
					
				?>

				<?php
					/**
					 * woocommerce_archive_description hook.
					 *
					 * @hooked woocommerce_taxonomy_archive_description - 10
					 * @hooked woocommerce_product_archive_description - 10
					 */
					// do_action( 'woocommerce_archive_description' );
				?>

			<?php if ( have_posts() ) : ?>
					<?php
						/**
						 * woocommerce_before_shop_loop hook.
						 *
						 * @hooked woocommerce_result_count - 20
						 * @hooked woocommerce_catalog_ordering - 30
						 */
						// do_action( 'woocommerce_before_shop_loop' );
					?>
					<div class="spacer"></div>
				</div>
				<?php woocommerce_product_loop_start(); ?>

					<?php woocommerce_product_subcategories(); ?>

					<?php while ( have_posts() ) : the_post(); ?>
						
						<div class="col-xs-12 col-sm-3">
							<?php wc_get_template_part( 'content', 'product' ); ?>
						</div>

					<?php endwhile; // end of the loop. ?>

				<div class="col-md-12">
				<?php woocommerce_product_loop_end(); ?>

				<?php
					/**
					 * woocommerce_after_shop_loop hook.
					 *
					 * @hooked woocommerce_pagination - 10
					 */
					do_action( 'woocommerce_after_shop_loop' );
				?>

			<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

				<?php wc_get_template( 'loop/no-products-found.php' ); ?>

			<?php endif; ?>

			<?php
				/**
				 * woocommerce_after_main_content hook.
				 *
				 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
				 */
				do_action( 'woocommerce_after_main_content' );
			?>

			<?php
				/**
				 * woocommerce_sidebar hook.
				 *
				 * @hooked woocommerce_get_sidebar - 10
				 */
				do_action( 'woocommerce_sidebar' );
			?>		
			</div>
			<div class="spacer"></div>
			<div class="spacer"></div>
		</div>
	</div>
</div>
	
	

<?php get_footer( 'shop' ); ?>
