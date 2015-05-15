<?php

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
?>
