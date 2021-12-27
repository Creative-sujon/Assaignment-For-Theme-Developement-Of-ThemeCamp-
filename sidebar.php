<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Js_Bangladesh
 */



if ( is_active_sidebar( 'sidebar-1' ) ) { ?>

    <!-- Sidebar -->
    <ul id="sidebar">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </ul>
<?php return; } ?>
