<?php

/*
Plugin Name: CMSMove: HTML to Wordpress Migration
Plugin URI: http://cmsmove.com/wordpress-migration/html-to-wordpress-migration.html
Description:
Version: 1.0.0
Author: CmsMove
Author URI: http://cmsmove.com/
License: GPLv2
*/

/*
Copyright (C) 2015 LitExtension

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*/

function htwp_menu()
{
    add_menu_page('CMSMove: HTML to WordPress Migration', 'HTML to WordPress Migration', 'activate_plugins', 'htwp_page', 'htwp_page');
}
add_action('admin_menu', 'htwp_menu');

function htwp_page(){
    $source_cart = 'HTML';
    $product_link = 'http://cmsmove.com/wordpress-migration/html-to-wordpress-migration.html';
    $img_url = htwp_url('img/logo.jpg');
    include 'views/index.php';
}

function htwp_css_js(){
    wp_enqueue_style('htwp-style', plugins_url('css/style.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'htwp_css_js');

function htwp_url($path){
    return plugins_url($path, __FILE__);
}
