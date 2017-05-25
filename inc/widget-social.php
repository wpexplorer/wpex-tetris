<?php
/**
 * Social Icons Widget
 */
class wpex_social_widget extends WP_Widget {

	public function wpex_social_widget() {
		$widget_ops = array();
		parent::__construct( 'wpex_social_widget', __( 'Social Profiles', 'tetris' ), $widget_ops );
	}

	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] ); ?>
		  <?php echo $before_widget; ?>
			  <?php if ( $title ) {
					echo $before_title . $title . $after_title;
				} ?>
				<ul class="wpex-widget-social">
					<?php
					$wpex_social_links = wpex_social_links();
					foreach( $wpex_social_links as $wpex_social_link ) :
						if ( $link = get_theme_mod( 'wpex_social_'. $wpex_social_link ) ) {
							echo '<li><a href="'. esc_url( $link ) .'" title="'. esc_attr( $wpex_social_link ) .'" target="_blank"><img src="'. get_template_directory_uri() .'/images/social/'. esc_attr( $wpex_social_link ) .'.png" alt="'. esc_attr( $wpex_social_link ) .'" height="32" width="32" /></a></li>';
						}
					endforeach; ?>
				</ul>
		  <?php echo $after_widget; ?>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags( $new_instance['title'] );
		return $instance;
	}

	public function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array(
			'title' => __( 'Follow Us', 'tetris' )
		) );
		$title = esc_attr( $instance['title'] ); ?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id('title') ); ?>"><?php _e( 'Title:', 'tetris' ); ?></label> 
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title', 'tetris' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php
	}
}

// Register widget
function register_wpex_social_widget() {
	register_widget( 'wpex_social_widget' );
}
add_action( 'widgets_init', 'register_wpex_social_widget' );