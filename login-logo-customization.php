<?php
/*
Plugin Name: Login Logo Customization
Plugin URI: http://www.digg-it.info/category/wp-plugin-dev/login-logo-customization
Description: Change Your Wp-Admin, wp-login Logo
Version: 0.1b
Author: Pigi
Author URI: http://www.digg-it.info
License: GPL2
*/


/*  Copyright 2010  Pigi  (email : pigi.bari@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

require_once('menu/menu.php');


/* Here Starts real sharer function */

function login_logo_customization() {

$logourl = get_option('logo_custom_url');
?>
<?php if (get_option('edit_logo') == "1") 
    echo '<style type="text/css">
        h1 a { background-image:url('.$logourl.') !important; } </style>';
}

add_action('login_head', 'login_logo_customization');
/* 
function login_link_customization() {


<?php if (get_option('edit_link') == "1")

echo bloginfo('url'); 
}
add_filter('login_headerurl', 'login_link_customization');
 */ ?>