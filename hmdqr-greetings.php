<?php
/*
 * Plugin Name: Greetings Shortcode
 * Description: This plugin adds a shortcode for displaying personalized greetings for logged in users or guests in multiple languages, using the Polylang plugin.
 * Version: 1.1
 * Author: Hamad M H Al-Qassar
 */

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

function gs_greetings_shortcode( $atts ) {
  // Extract the nickname attribute (if present)
  $atts = shortcode_atts( array(
    'nick' => '',
  ), $atts );

  // Check if the user is logged in
  if ( is_user_logged_in() ) {
    // Get the current user's display name
    $current_user = wp_get_current_user();
    $display_name = $atts['nick'] ? $atts['nick'] : $current_user->display_name;
  } else {
    // Set the display name to the nickname (if provided) or "Guest"
    $display_name = $atts['nick'] ? $atts['nick'] : __( 'Guest', 'gs-greetings' );
  }

  // Get the current time
  $current_time = (int) current_time( 'H' );

  // Set default greeting in case the time is not covered by the conditions below
  $greeting = '';

  // Set the greeting based on the time of day and the current language
  if ( $current_time < 12 ) {
    $morning_greeting = pll__( 'Good morning, dear', 'gs-greetings' );
    $greeting = "{$morning_greeting} {$display_name}!";
  } elseif ( $current_time < 18 ) {
    $afternoon_greeting = pll__( 'Good afternoon, dear', 'gs-greetings' );
    $greeting = "{$afternoon_greeting} {$display_name}!";
  } else {
    $evening_greeting = pll__( 'Good evening, dear', 'gs-greetings' );
    $greeting = "{$evening_greeting} {$display_name}!";
  }

  return $greeting;
}

// Add the shortcode
add_shortcode( 'greetings', 'greetings_shortcode' );
