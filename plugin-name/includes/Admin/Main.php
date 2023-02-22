<?php
/**
 * Handle admin hooks.
 *
 * @class       Admin
 * @version     1.0.0
 * @package     Plugin_Name/Classes/
 */

namespace Plugin_Name\Admin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Admin main class
 */
final class Main {

	/**
	 * Initialize hooks
	 *
	 * @return void
	 */
	public static function hooks() {

		Assets::hooks();

		add_action( 'current_screen', array( __CLASS__, 'conditional_includes' ) );
	}


	/**
	 * Include admin files conditionally.
	 *
	 * @return void
	 */
	public static function conditional_includes() {

		$screen = get_current_screen();

		if ( ! $screen ) {
			return;
		}

		switch ( $screen->id ) {
			case 'dashboard':
			case 'options-permalink':
			case 'users':
			case 'user':
			case 'profile':
			case 'user-edit':
		}
	}
}