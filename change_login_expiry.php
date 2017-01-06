<?php
/**
 * @package Change Login Expiry
 */
/*
Plugin Name: Change Login Expiry
Plugin URI: https://github.com/siruguri/wp-plugin-change-expiry
Description: Change Login Expiry sets your login cookie's expiry time - there is no admin screen for it though.
Version: 0.4.0
Author: Sameer Siruguri
Author URI: https://www.dstrategies.org/
License: GPLv2 or later
Text Domain: dstrategies
*/

if ( !function_exists( 'cle_cookie_expiration' ) ) {
  function cle_cookie_expiration( $expiration, $user_id, $remember ) {
    /* 15 minutes */
    return $remember ? $expiration : 60 * 15;
  }
}
add_filter( 'auth_cookie_expiration', 'cle_cookie_expiration', 999, 3 );
