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
        <section class="panel">
            <div class="place">
                <?php
                $rows = get_field('disponibility', 'option');
                foreach ($rows as $row) {
                    echo '<div class="info">';
                    echo '<div class="date">';
                    echo $row['date'];
                    echo '</div>';
                    echo '<div class="card">';
                    echo '<div class="content">';
                    echo '<div class="text">';
                    echo '<p class="title">' . $row['title'] . '</p>';
                    echo '<p class="spec">' . $row['specification'] . '</p>';
                    echo '</div>';
                ?>
                    <a href="<?php echo get_page_link('12') ?>"> <?php echo $row['button'] ?></a>
                    <?php echo "</div>"; ?>
                    <img src="<?php echo ($row['image']['sizes']['panel']); ?>" alt="" />
                <?php
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </section>
    </header>