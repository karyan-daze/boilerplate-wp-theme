<?php
/**
 * Declaring widgets
 *
 *
 * @package understrap
 */
function understrap_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'understrap' ),
		'id'            => 'sidebar-1',
		'description'   => 'Sidebar widget area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
        'name'          => __( 'Hero Slider', 'understrap' ),
        'id'            => 'hero',
        'description'   => 'Hero slider area. Place two or more widgets here and they will slide!',
        'before_widget' => '<div class="item">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'name'          => __( 'Hero Static', 'understrap' ),
        'id'            => 'statichero',
        'description'   => 'Static Hero widget. no slider functionallity',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

        register_sidebar( array(
        'name'          => __( 'Footer Full', 'understrap' ),
        'id'            => 'footerfull',
        'description'   => 'Widget area below main content and above footer',
        'before_widget' => '<div class="col-md-8 offset-md-2 footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}
add_action( 'widgets_init', 'understrap_widgets_init' );


class Social_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'social_widget', // Base ID
			__( 'Social Widget', 'airteam' ), // Name
			array( 'placeholder' => __( 'Social Network Footer', 'airteam' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {


		$args['before_widget'] = '<div class="col-md-8 offset-md-2 footer-widget">';
		$args['after_widget'] = '</div>';
		/* this is the HTML whats outputted on the website */
		$args['text_area_before'] = '<ul class="social-menu">';
		$args['text_area_after'] = '</ul>';

		/* this is whats outputted on the website

            these are the dynamic variables loaded from the database ( widgets data )
            $instance['placeholder']
            $instance['button']
            $args is the variables above that contain the HTML that is outputted
        */

		echo $args['before_widget'];
		if ( ! empty( $instance['linkedin']) && ! empty( $instance['youtube'] )) {
			echo $args['text_area_before'];
			echo '<li><a href="'.$instance['youtube'].'" class="fa fa-youtube"></a></li>';
			echo '<li><a href="'.$instance['twitter'].'" class="fa fa-twitter"></a></li>';
			echo '<li><a href="'.$instance['instagram'].'" class="fa fa-instagram"></a></li>';
			echo '<li><a href="'.$instance['linkedin'].'" class="fa fa-linkedin"></a></li>';
			echo '<li><a href="'.$instance['xing'].'" class="fa fa-xing"></a></li>';
			echo $args['text_area_after'];
		}
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 *
	 *
	 *
	 */
	public function form( $instance ) {

		/*
            This is the actual form that saves the widget in the wordpress backend
            $instance['button']
            $instance['placeholder']
            $instance['icon']
            if you want to change the button
            or the placeholder and the icon.
            Make sure to change these names everywhere below and above ( $instance['button'] )
        */

		$youtube = ! empty( $instance['youtube'] ) ? $instance['youtube'] : __( 'youtube url', 'airteam' );
		$instagram = ! empty( $instance['instagram'] ) ? $instance['instagram'] : __( 'instagram', 'airteam' );
		$twitter = ! empty( $instance['twitter'] ) ? $instance['twitter'] : __( 'twitter', 'airteam' );
		$xing = ! empty( $instance['xing'] ) ? $instance['xing'] : __( 'xing', 'airteam' );
		$linkedin = ! empty( $instance['linkedin'] ) ? $instance['linkedin'] : __( 'linkedin', 'airteam' );


		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'youtube' ); ?>"><?php _e( 'youtube link:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" type="text" value="<?php echo esc_attr( $youtube ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e( 'twitter' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" type="text" value="<?php echo esc_attr( $twitter ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php _e( 'instagram' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" type="text" value="<?php echo esc_attr( $instagram ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php _e( 'linkedin' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" type="text" value="<?php echo esc_attr( $linkedin ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'xing' ); ?>"><?php _e( 'xing' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'xing' ); ?>" name="<?php echo $this->get_field_name( 'xing' ); ?>" type="text" value="<?php echo esc_attr( $xing ); ?>">
		</p>
		<?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {

		/*
            Same thing but for the update of the widget in the wordpress backend
            $instance['button']
            $instance['placeholder']
            if you want to change the button
            or the placeholder and the icon.
            Make sure to change these names everywhere below and above ( $instance['button'] )
       */
		$instance = array();
		$instance['xing'] = ( ! empty( $new_instance['xing'] ) ) ? strip_tags( $new_instance['xing'] ) : '';
		$instance['youtube'] = ( ! empty( $new_instance['youtube'] ) ) ? strip_tags( $new_instance['youtube'] ) : '';
		$instance['instagram'] = ( ! empty( $new_instance['instagram'] ) ) ? strip_tags( $new_instance['instagram'] ) : '';
		$instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';
		$instance['linkedin'] = ( ! empty( $new_instance['linkedin'] ) ) ? strip_tags( $new_instance['linkedin'] ) : '';

		return $instance;
	}

}

function register_social_widget() {
	register_widget( 'Social_Widget' );
}
add_action( 'widgets_init', 'register_social_widget' );