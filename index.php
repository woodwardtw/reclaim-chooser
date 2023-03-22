<?php 
/*
Plugin Name: Reclaim Chooser
Plugin URI:  https://github.com/
Description: For stuff that's magical
Version:     1.0
Author:      Tom Woodward
Author URI:  https://reclaimhosting.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: my-toolset

*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );




function dooo_plugin_list(){
   // Check if get_plugins() function exists. This is required on the front end of the
   // site, since it is in a file that is normally only loaded in the admin.
   if ( ! function_exists( 'get_plugins' ) ) {
      require_once ABSPATH . 'wp-admin/includes/plugin.php';
   }

   $all_plugins = get_plugins();

   // Save the data to the error log so you can see what the array format is like.
   //var_dump($all_plugins);
   $html = '<h2 class="dooo-header">Plugins</h2>';
   $i = 0;
   foreach ($all_plugins as $index=>$plugin) {
      // code...
      $i++;     
      $name = $plugin['Name'];
      $url = $plugin['PluginURI'];
      $description = $plugin['Description'];
      if($name != "Reclaim Chooser"){
          $html .= "<div class='dooo-list' id='dooo-plugin-{$i}'><a href='{$url}'>{$name}</a> <span class='plugin-descrip' id='dooo-plugin-description-{$i}'> - {$description}</span></div>";
      }     
   }
   return $html;
}

add_shortcode( 'dooo_plugins', 'dooo_plugin_list' );


function dooo_theme_list(){
   $all_themes = wp_get_themes();
   $html = '<h2 class="dooo-header">Themes</h2>';
   $i = 0;
    foreach ($all_themes as $index=>$theme) {
      // code...     
      //var_dump($theme);
      $i++;
      $name = $theme->get('Name');
      $description = $theme->get('Description');
      $url = $theme->get('ThemeURI');
      $html .= "<div class='dooo-list' id='dooo-theme-{$i}'><a href='{$url}'>{$name}</a> <span class='theme-descrip' id='dooo-theme-description-{$i}'> - {$description}</span></div>";
   }
   return $html;
}

add_shortcode( 'dooo_themes', 'dooo_theme_list' );


/**
 * Auto import a XML file
 */
add_action( 'after_setup_theme', 'reclaim_chooser_autoimport' );

function reclaim_chooser_autoimport() {
 

}


//LOGGER -- like frogger but more useful

if ( ! function_exists('write_log')) {
   function write_log ( $log )  {
      if ( is_array( $log ) || is_object( $log ) ) {
         error_log( print_r( $log, true ) );
      } else {
         error_log( $log );
      }
   }
}

  //print("<pre>".print_r($a,true)."</pre>");
