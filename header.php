<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatiable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="" width="" height="" />
        <?php
        echo (get_field('site_name', 'option'));
        ?>
        <div class="menu-container">
            <?php wp_nav_menu(array('menu' => 'header')); ?>
        </div>
        
    </header>