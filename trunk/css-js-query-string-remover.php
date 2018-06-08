<?php
/*
Plugin Name: CSS JS Query String Remover
Plugin URI: https://kevinhq.com/plugin-review/css-js-query-string-remover-plugin/
Description: Fix WordPress performance issue: Remove query strings from static resources
Version: 1.1
Author: kevinhq
Author URI: https://kevinhq.com/
License: GPL2

------------------------------------------------------------------------
Copyright kevinhq.com

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA

*/


/**
 * Remove query string from all CSS and JS on WordPress
 */

function cjqsr_remove_query_string( $src ){ 
    $parts = explode( '?', $src ); 	
    return $parts[0]; 
}
if ( ! is_admin() ) {
  add_filter( 'script_loader_src', 'cjqsr_remove_query_string', 15, 1 ); 
  add_filter( 'style_load`er_src', 'cjqsr_remove_query_string', 15, 1 );
}
