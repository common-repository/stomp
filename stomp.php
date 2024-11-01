<?php
/*
Plugin Name: Stomp
Plugin URI: http://cubecolour.co.uk/stomp
Description: Stomps the footer down to the bottom of the page when the page content is short
Author: cubecolour
Version: 1.0.1
Author URI: http://cubecolour.co.uk/
License: GPL

  Copyright 2016-2022 Michael Atkins

  Plugin Licenced under the GNU GPL:

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/


if ( ! defined( 'ABSPATH' ) ) exit;


/**
* Set Footer Element Constant
*
*/
if ( !defined( 'STOMP_FOOTER_ELEMENT' ) ) {
	define( 'STOMP_FOOTER_ELEMENT', 'footer' );
}


/**
* Add Meta Links in plugins table
*
*/
function cc_stomp_meta_links( $links, $file ) {

	//* add the plugin page links
	if ( $file == plugin_basename(__FILE__) ) {

		$link = array(
			'support'	=> 'https://wordpress.org/support/plugin/stomp',
			'twitter'	=> 'http://twitter.com/cubecolour',
			'review'	=> 'https://wordpress.org/support/view/plugin-reviews/stomp',
			'donate'	=> 'https://cubecolour.co.uk/wp',
		);

		$text = array(
			'support'	=> __( 'Support', 'stomp' ),
			'twitter'	=> __( 'Cubecolour on Twitter', 'stomp' ),
			'review'	=> __( 'Review', 'stomp' ),
			'donate'	=> __( 'Donate', 'stomp' ),
		);

		$style = array(
			'icon'		=> 'style="-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;font-size: 16px;margin: 3px 0 -3px;"',
		);

		$addlinks = array(
			'<a href="' . $link[ 'support' ] . '"> <span class="dashicons dashicons-sos" ' . $style[ 'icon' ] . 'title="' .  $text[ 'support' ] . '"></span></a>',
			'<a href="' . $link[ 'twitter' ] . '"><span class="dashicons dashicons-twitter" ' . $style[ 'icon' ] . 'title="' . $text[ 'twitter' ] . '"></span></a>',
			'<a href="' . $link[ 'review' ] . '"><span class="dashicons dashicons-star-filled" ' . $style[ 'icon' ] . 'title="' . $text[ 'review' ] . '"></span></a>',
			'<a href="' . $link[ 'donate' ] . '"><span class="dashicons dashicons-heart" ' . $style[ 'icon' ] . 'title="' . $text[ 'donate' ] . '"></span></a>',		);

		return array_merge( $links, $addlinks );
	}

	//* Return the merged links
	return $links;
}
add_filter( 'plugin_row_meta', 'cc_stomp_meta_links', 10, 2 );


/**
* Add scripts & styles
*
*/
function cc_stomp_scripts(){

	wp_enqueue_script( 'jquery' );

	$script = "<script>(function($){ $(window).bind( 'load resize', function() { if( $( window ).height() > $( 'body' ).height() ) { $( '" . STOMP_FOOTER_ELEMENT . "' ).addClass( 'stomp' ); } else { $( '" . STOMP_FOOTER_ELEMENT . "' ).removeClass( 'stomp' ); } }); })(jQuery);</script>";

	$style = "<style type='text/css' media='screen'>" . STOMP_FOOTER_ELEMENT . ".stomp{position:fixed;bottom:0;width:100%;}</style>";

	echo $script . $style;
}

add_action( 'wp_footer', 'cc_stomp_scripts' );