<?php
/* Template Name: Informations */
get_header();
$banner_title = get_field('banner_title');
$banner_image = get_field('banner_image');
?>

<section class="bannerF">
    <div class="container" style="background-image: url(<?php echo ($banner_image['sizes']['banner']); ?>);">
        <h1 class="h1-title">
            <?php
            echo $banner_title;
            ?>
        </h1>
    </div>
</section>

<?php
get_footer();
?>