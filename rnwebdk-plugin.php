<?php

/**
 *
 *@package  rnwebdkPlugin
 * 
*/
/*
Plugin Name: rnwebdk Plugin
Plugin URI: http://rnweb.dk
Description: Learning plugin development with alessendaro from youtube
Version 1.0.0
Author: Rami "rnwebdk" Noureddine
Author URI: http://rnweb.dk
License: GPLv2 or later
Text Domain: rnwebdk-plugin
*/


/*
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. if not, write to the free software
Foundation, Inc., S1 Franklin street, Fifth Floor, Boston, MA 02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
 */

// the ABSPATH is the absolute path that is defined by wordpress when initialized.
// So this is used for security matters, if this constant is not set, then someone is trying to
// look at this file without permission. so if so, kill the script and dont execute more code
if ( ! defined( 'ABSPATH' )) {
	die;
}

// another shorthand for the above
// defined( 'ABSPATH' ) or die('You dont have permission to access this file'); 


// a third way is to check if the add_action function is available
// if ( ! function_exists( 'add_action' )) {
// 	echo 'You dont have permission to access this file';
// 	exit;
// }