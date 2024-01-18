<?php
/* Template Name: 404 */
get_header();
$banner_title = get_field('banner_title');
$banner_image = get_field('banner_image');
?>

<section class="bannerF">
    <div class="container" style="background-image: url(<?php echo ($banner_image['sizes']['banner']); ?>);">
        <h1 class="h1-title">
            ERREUR 404
        </h1>
    </div>
</section>
<div class="wrap">
    <section class="content-404">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/404.svg" alt="" width="400px" height="400px" />
        <p>Sinon vous pouvez jeter un œil à nos questions fréquentes !</p>
        <a href="<?php echo get_page_link('14')?>#faq">Voir les questions fréquentes</a>
    </section>
</div>

<?php
get_footer();
?>