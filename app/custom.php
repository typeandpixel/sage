<?php

namespace App;

/**
 * Saving ACF
 *
 * @link https://www.advancedcustomfields.com/resources/local-json/
 */
add_filter('acf/settings/save_json', function ( $path ) {
  // Default ACF JSON path
  $path = get_template_directory() . '/assets/acf-json';

  // return
  return $path;
});

/**
 * Loading ACF
 *
 * @link https://www.advancedcustomfields.com/resources/local-json/
 */
add_filter('acf/settings/load_json', function ( $paths ) {
  // remove original path (optional)
  unset($paths[0]);

  // append path
  $paths[] = get_template_directory() . '/assets/acf-json';

  // return
  return $paths;
});

/**
 * Create an options page
 *
 * @link https://www.advancedcustomfields.com/add-ons/options-page/
 */
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
}
