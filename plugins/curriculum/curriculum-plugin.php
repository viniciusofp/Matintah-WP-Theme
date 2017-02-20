<?php
/*
Plugin Name: CV Matintah
Description: Widgets para página de currículo
Author: Vinícius Pereira
Author URI: http://viniciusofp.com.br
Version: 1.0
*/
/* Start Adding Functions Below this Line */


// Creating the widget 
class wpb_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'wpb_widget', 

// Widget name will appear in UI
__('Exposições, Eventos e Oficinas', 'wp_widget_oficinas'), 

// Widget description
array( 'description' => __( 'Área para registrar eventos na página de Currículo', 'wp_widget_oficinas' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
$ano = apply_filters( 'widget_ano', $instance['ano'] );
$mes = apply_filters( 'widget_mes', $instance['mes'] );
$local = apply_filters( 'widget_local', $instance['local'] );
$descricao = apply_filters( 'widget_descricao', $instance['descricao'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
// echo $args['before_title'] . $title . $args['after_title'];

// This is where you run the code and display the output
?>
<div>
	<span class="ano"><strong><?php echo $ano; ?></strong></span>
	<p class="mes"><strong><?php echo $mes; ?></strong> | <?php echo $local; ?></p>
	<p class="title"><strong><?php echo $title; ?></strong></p>
	<p class="descricao"><?php echo $descricao; ?></p>
</div>
	

<?php
echo $args['after_widget'];
}
		
// Widget Backend Title
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'Título', 'wp_widget_oficinas' );
}
if ( isset( $instance[ 'ano' ] ) ) {
$ano = $instance[ 'ano' ];
}
else {
$ano = __( 'Ano', 'wp_widget_oficinas' );
}
if ( isset( $instance[ 'mes' ] ) ) {
$mes = $instance[ 'mes' ];
}
else {
$mes = __( 'Mês', 'wp_widget_oficinas' );
}
if ( isset( $instance[ 'local' ] ) ) {
$local = $instance[ 'local' ];
}
else {
$local = __( 'Local', 'wp_widget_oficinas' );
}
if ( isset( $instance[ 'descricao' ] ) ) {
$descricao = $instance[ 'descricao' ];
}
else {
$descricao = __( 'Descrição', 'wp_widget_oficinas' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Título:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ano' ); ?>"><?php _e( 'Ano:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'ano' ); ?>" name="<?php echo $this->get_field_name( 'ano' ); ?>" type="text" value="<?php echo esc_attr( $ano ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'mes' ); ?>"><?php _e( 'Mês:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'mes' ); ?>" name="<?php echo $this->get_field_name( 'mes' ); ?>" type="text" value="<?php echo esc_attr( $mes ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'local' ); ?>"><?php _e( 'Local:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'local' ); ?>" name="<?php echo $this->get_field_name( 'local' ); ?>" type="text" value="<?php echo esc_attr( $local ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'descricao' ); ?>"><?php _e( 'Descrição:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'descricao' ); ?>" name="<?php echo $this->get_field_name( 'descricao' ); ?>" type="text" value="<?php echo esc_attr( $descricao ); ?>" />
</p>
<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['ano'] = ( ! empty( $new_instance['ano'] ) ) ? strip_tags( $new_instance['ano'] ) : '';
$instance['mes'] = ( ! empty( $new_instance['mes'] ) ) ? strip_tags( $new_instance['mes'] ) : '';
$instance['local'] = ( ! empty( $new_instance['local'] ) ) ? strip_tags( $new_instance['local'] ) : '';
$instance['descricao'] = ( ! empty( $new_instance['descricao'] ) ) ? strip_tags( $new_instance['descricao'] ) : '';
return $instance;
}
} // Class wpb_widget ends here









// Register and load the widget
function wpb_load_widget() {
	register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );


/* Stop Adding Functions Below this Line */
?>