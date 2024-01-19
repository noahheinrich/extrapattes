<footer>
    <div class="footer">
        <div class="wrap">
            <section class="top">
                <nav class="left">
                    <p>à propos</p>
                    <?php wp_nav_menu(array('menu' => 'footer-left')); ?>
                </nav>
                <div class="mid">
                    <div class="image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-high.png" alt="" width="" height="" />
                    </div>
                    <div class="content">
                        <?php
                        echo '<p class="title">' . (get_field('site_name', 'option')) . '</p>';
                        echo '<div class="logos">';
                        echo '<a href="' . get_field('insta_link', 'option') . '"><img src="' . get_stylesheet_directory_uri() . '/images/instagram.svg" alt="" width="50px" height="50px" /></a>';
                        echo '<a href="' . get_field('facebook_link', 'option') . '"><img src="' . get_stylesheet_directory_uri() . '/images/facebook.svg" alt="" width="50px" height="50px" /></a>';
                        echo '</div>';
                        ?>
                    </div>
                </div>
                <nav class="right">
                    <p>Nous contacter</p>
                    <?php wp_nav_menu(array('menu' => 'footer-right')); ?>
                </nav>
            </section>
        </div>
        <section class="bottom">
            <?php wp_nav_menu(array('menu' => 'footer-legal')); ?>
        </section>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>