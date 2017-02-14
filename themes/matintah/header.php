<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<?php wp_head(); ?>

<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

</head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" crossorigin="anonymous">

<?php
$classTop = '';
if (true ) {
  $classTop = 'onTop homenav';
}
?>

<body>
<nav class="navbar navbar-fixed-top <?php echo $classTop; ?>">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php the_custom_logo(); ?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/loja/">Loja</a></li>
        <li><a href="#">Currículo</a></li>
        <li><a href="#">Oficinas</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/minha-conta/"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&ensp;Minha Conta</a></li>
        <?php if (! is_cart() && ! is_checkout()) {
          echo '<li class="mini-cart-trigger"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&ensp;Carrinho&ensp;<span>' . sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ) .'</span></a></li>';


        }
        ?>
        <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></span></a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div id="sidebar-wrapper">
  <div id="fade"></div>
  <div id="sidebar-cart">
      <?php
      /**
       * woocommerce_sidebar hook.
       *
       * @hooked woocommerce_get_sidebar - 10
       */
      do_action( 'woocommerce_sidebar' );
    ?>        
  </div>

</div>
