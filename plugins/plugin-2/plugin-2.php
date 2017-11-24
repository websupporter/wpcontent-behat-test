<?php # -*- coding: utf-8 -*-
declare( strict_types = 1 );

/**
 * Plugin Name: Plugin 2
 */

add_filter( 'the_content', function( $content ) {

	return '<p>Plugin 2</p>' . $content;
} );
