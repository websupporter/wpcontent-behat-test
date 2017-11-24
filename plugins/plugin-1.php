<?php # -*- coding: utf-8 -*-
declare( strict_types = 1 );

/**
 * Plugin Name: Plugin 1
 */

add_filter( 'the_content', function( $content ) {

	return '<p>Plugin 1</p>' . $content;
} );
