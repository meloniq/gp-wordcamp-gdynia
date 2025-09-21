<?php
/**
 * Facts class.
 *
 * @package Meloniq\GpWordcampGdynia
 */

namespace Meloniq\GpWordcampGdynia;

/**
 * Format Zip class.
 *
 * This class handles the export of translations in a Zip file format.
 */
class Facts {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'admin_notices', array( $this, 'admin_notice' ) );
	}

	/**
	 * Display an admin notice with a random fact about GlotPress.
	 *
	 * @return void
	 */
	public function admin_notice() {
		$fact = $this->get_random_fact();

		echo '<div class="notice notice-info is-dismissible">';
		echo '<p><strong>' . esc_html__( 'Did you know?', 'gp-wordcamp-gdynia' ) . '</strong> ' . esc_html( $fact ) . '</p>';
		echo '</div>';
	}

	/**
	 * Get a random fact about GlotPress.
	 *
	 * @return string A random fact.
	 */
	public function get_random_fact() {
		$facts = array(
			__( 'GlotPress was started in 2008 by Nikolay Bachiyski and is now maintained by the WordPress community.', 'gp-wordcamp-gdynia' ),
			__( 'GlotPress is built using PHP and the WordPress framework.', 'gp-wordcamp-gdynia' ),
			__( 'GlotPress supports multiple file formats for translation, including .po, .mo, .php, and .json.', 'gp-wordcamp-gdynia' ),
			__( 'GlotPress allows collaborative translation efforts, enabling multiple translators to work on the same project simultaneously.', 'gp-wordcamp-gdynia' ),
			__( 'GlotPress has a robust permission system that allows administrators to control access to projects and translations.', 'gp-wordcamp-gdynia' ),
			__( 'GlotPress can be extended with plugins to add new features or modify existing functionality.', 'gp-wordcamp-gdynia' ),
			__( 'GlotPress integrates with popular version control systems like Git to streamline the translation workflow.', 'gp-wordcamp-gdynia' ),
			__( 'GlotPress provides a REST API that allows developers to interact with the platform programmatically.', 'gp-wordcamp-gdynia' ),
			__( 'GlotPress is used by many open-source projects, including WordPress itself, to manage translations.', 'gp-wordcamp-gdynia' ),
			__( 'GlotPress has a built-in glossary feature that helps maintain consistency in translations across projects.', 'gp-wordcamp-gdynia' ),
		);

		$random_key = array_rand( $facts );

		return $facts[ $random_key ];
	}
}
