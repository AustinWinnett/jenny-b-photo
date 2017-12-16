<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/cpt/main.php',               // Custom post type module
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

function dd_include_module( $module, $vars, $class_id = array() ) {

  $data = $vars;
  $module_id = $class_id['id'];
  $module_classes = $class_id['classes'];

  include(locate_template('templates/modules/' . $module . '.php'));
}

function custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**
 * Runs get_template_part but returns the content rather than outputting it, so that
 * it can be saved as a variable.
 * @param  string $slug first part of the file path
 * @param  string $name last part of the file path
 * @return string  html output of the requested template part
 */
function return_get_template_part($slug, $name=null) {

   ob_start();
   get_template_part($slug, $name);
   $content = ob_get_contents();
   ob_end_clean();

   return $content;
}
