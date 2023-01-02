<?php
/*
 * Plugin Name: Greetings Shortcode
 * Description: This plugin adds a shortcode for displaying personalized greetings for logged in users or guests in multiple languages, using the Polylang plugin.
 * Version: 1.0
 * Author: Hamad M H Al-Qassar
 */

function greetings_shortcode() {
  // Check if the user is logged in
  if ( is_user_logged_in() ) {
    // Going to get the current user's display name
    $current_user = wp_get_current_user();
    $display_name = $current_user->display_name;
  } else {
    // Set the display name to "Guest" if the user is not logged in
    $display_name = __( 'Guest', 'polylang' );
  }

  // Get the current time
  $current_time = current_time( 'H' );

  // Display different greetings based on the time of day and the current language
  if ( $current_time < 12 ) {
    if ( function_exists( 'pll__' ) ) {
      // Use the Polylang plugin to translate the greeting
      $greeting = pll__( 'Good morning, dear' ) . " $display_name!";
    } else {
      // Use the default language (English) if the Polylang plugin is not available
      $greeting = "Good morning, dear $display_name!";
    }
  } elseif ( $current_time < 18 ) {
    if ( function_exists( 'pll__' ) ) {
      // Use the Polylang plugin to translate the greeting
      $greeting = pll__( 'Good afternoon, dear' ) . " $display_name!";
    } else {
      // Use the default language (English) if the Polylang plugin is not available
      $greeting = "Good afternoon, dear $display_name!";
    }
  } else {
    if ( function_exists( 'pll__' ) ) {
      // Use the Polylang plugin to translate the greeting
      $greeting = pll__( 'Good evening, dear' ) . " $display_name!";
    } else {
      // Use the default language (English) if the Polylang plugin is not available
      $greeting = "Good evening, dear $display_name!";
    }
  }
  return $greeting;
}

// Add the shortcode
add_shortcode( 'greetings', 'greetings_shortcode' );
