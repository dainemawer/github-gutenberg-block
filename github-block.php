<?php
/**
 * @package Gutenberg Github Block
 */

/*
Plugin Name: Github Gutenberg Block
Plugin URI:  https://github.com/dainemawer/github-gutenberg-block
Description: Adds beautiful Github Embeds to your WordPress theme
Version:     0.1.0
Author:      Daine Mawer
Author URI:  https://dainelindleymawer.me
License:     GPL2 or later
*/

/*
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
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

defined( 'ABSPATH' ) || exit;

require_once __DIR__ . '/github-block/block.php';

if( ! function_exists( 'github_block_init' ) ) {

    function github_block_init() {
        register_block_type( 'dainemawer/gitblock', array(
            'render_callback' => 'gitblock_render',
        ));
    }

    add_action( 'init', 'github_block_init' );

}




