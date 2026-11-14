<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function axis_lang() {
	$lang = function_exists( 'pll_current_language' ) ? pll_current_language( 'slug' ) : '';
	return $lang ? $lang : axis_default_lang();
}

function axis_default_lang() {
	$lang = function_exists( 'pll_default_language' ) ? pll_default_language( 'slug' ) : '';
	return $lang ? $lang : 'en';
}

function axis_home_url( $lang = '' ) {
	$lang = $lang ? $lang : axis_lang();
	$home = function_exists( 'pll_home_url' ) ? pll_home_url( $lang ) : home_url( '/' );
	return trailingslashit( $home );
}

function axis_lang_path( $path, $lang = '' ) {
	$lang = $lang ? $lang : axis_lang();
	$path = trim( (string) $path, '/' );

	if ( '' === $path || axis_default_lang() === $lang ) {
		return $path;
	}

	$suffix = '-' . $lang;
	$parts  = array_map(
		static function ( $part ) use ( $suffix ) {
			return substr( $part, -strlen( $suffix ) ) === $suffix ? $part : $part . $suffix;
		},
		explode( '/', $path )
	);

	return implode( '/', $parts );
}

function axis_url( $path = '', $lang = '' ) {
	$path = (string) $path;

	if ( preg_match( '#^(https?:)?//#i', $path ) || 0 === strpos( $path, '#' ) || 0 === strpos( $path, 'mailto:' ) || 0 === strpos( $path, 'tel:' ) ) {
		return $path;
	}

	$lang  = $lang ? $lang : axis_lang();
	$extra = '';

	if ( preg_match( '/^([^?#]*)([?#].*)$/', $path, $m ) ) {
		$path  = $m[1];
		$extra = $m[2];
	}

	$path = trim( $path, '/' );

	if ( '' === $path ) {
		return axis_home_url( $lang ) . $extra;
	}

	$page = get_page_by_path( $path );

	if ( $page && function_exists( 'pll_get_post' ) ) {
		$translation = pll_get_post( $page->ID, $lang );
		if ( $translation ) {
			return get_permalink( $translation ) . $extra;
		}
	}

	return axis_home_url( $lang ) . axis_lang_path( $path, $lang ) . '/' . $extra;
}

function axis_base_slug( $post = null ) {
	$post = get_post( $post );

	if ( ! $post ) {
		return '';
	}

	$slug = $post->post_name;
	$lang = function_exists( 'pll_get_post_language' ) ? pll_get_post_language( $post->ID, 'slug' ) : '';

	if ( $lang && axis_default_lang() !== $lang ) {
		$suffix = '-' . $lang;
		if ( substr( $slug, -strlen( $suffix ) ) === $suffix ) {
			$slug = substr( $slug, 0, -strlen( $suffix ) );
		}
	}

	return $slug;
}
