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
        <div class="header">
            <div class="main-title">
                <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="" width="" height="" /></a>
                <?php
                echo (get_field('site_name', 'option'));
                ?>
            </div>
            <nav class="menu-container">
                <?php wp_nav_menu(array('menu' => 'header')); ?>
                <button>Nous trouver</button>
                <a class="button" href="<?php echo (get_field('reservation_link', 'option')); ?>">Réserver</a>
            </nav>
        </div>
    </header>