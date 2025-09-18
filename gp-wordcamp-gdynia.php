<?php
/**
 * Plugin Name:       GP WordCamp Gdynia
 * Plugin URI:        https://blog.meloniq.net/gp-wordcamp-gdynia/
 *
 * Description:       Learn something new about GlotPress each time you visit the admin area.
 * Tags:              glotpress, wordcamp, gdynia
 *
 * Requires at least: 4.9
 * Requires PHP:      7.4
 * Version:           1.0
 *
 * Author:            MELONIQ.NET
 * Author URI:        https://meloniq.net/
 *
 * License:           GPLv2
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Text Domain:       gp-wordcamp-gdynia
 *
 * Requires Plugins:  glotpress
 *
 * @package Meloniq\GpWordcampGdynia
 */

namespace Meloniq\GpWordcampGdynia;

use GP;

// If this file is accessed directly, then abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'GPWCG_TD', 'gp-wordcamp-gdynia' );


/**
 * GP Init Setup.
 *
 * @return void
 */
function gp_init() {
	global $gpwcg_conference;

	require_once __DIR__ . '/src/class-facts.php';

	$gpwcg_conference['facts'] = new Facts();
}
add_action( 'gp_init', 'Meloniq\GpWordcampGdynia\gp_init' );
