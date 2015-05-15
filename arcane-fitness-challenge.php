<?php

	defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

	/*
	* Plugin Name: Fitness Challenge App Plugin
	* Plugin URI: http://www.arcaneindustries.co.uk/fitness-challenge
	* Description: Enables automatic collection of Trophy awards made by the Fitness Challenge application for display on this website
	* Version: 0.1
	* Author: Arcane Industries Ltd
	* Author URI: http://www.arcaneindustries.co.uk
	* Licence: GPL2
	*/

	function arcane_fitness_challenge_menu() {
		add_options_page(
			'Fitness Challenge Plugin',
			'Fitness Challenge',
			'manage_options',
			'arcane-fitness-challenge',
			'arcane_fitness_challenge_options_page'
		);
	}

	add_action('admin_menu', 'arcane_fitness_challenge_menu');

	function arcane_fitness_challenge_options_page() {
		if(!current_user_can('manage_options')) {
			wp_die('You do not have permission to access this page');
		}
		require('inc/options-page-wrapper.php');
	}

	class Arcane_Fitness_Challenge_Widget extends WP_Widget {

		function arcane_fitness_challenge_widget() {
			// Instantiate the parent object
			parent::__construct( false, 'Fitness Challenge Trophies' );
		}

		function widget( $args, $instance ) {
			extract($args);
			$title = apply_filters( 'widget_title', $instance['title']);
			require('inc/front-end.php')
		}

		function update( $new_instance, $old_instance ) {
			// Save widget options
			$instance = $old_instance;
			$instance['title'] = strip_tags($new_instance['title']);

			return $instance;
		}

		function form( $instance ) {
			// Output admin widget options form

			$title = esc_attr($instance['title']);
			require('inc/widget-fields.php');

		}
	}

	function arcane_fitness_challenge_register_widgets() {
		register_widget( 'Arcane_Fitness_Challenge_Widget' );
	}

	add_action( 'widgets_init', 'arcane_fitness_challenge_register_widgets' );


	function create_trophy_post_type() {
	  register_post_type( 'trophy',
	    array(
	      'labels' => array(
	        'name' => __( 'Trophies' ),
	        'singular_name' => __( 'Trophy' )
	      ),
	      'public' => true,
	      'has_archive' => true,
	    )
	  );
	}

	add_action( 'init', 'create_trophy_post_type' );

?>
