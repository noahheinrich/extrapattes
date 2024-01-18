<?php
/* Template Name: Mentions légales */
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
<div class="wrap">
    <section class="legal">
        <div class="container">
            <?php
            $rows = get_field('content');
            foreach ($rows as $row) :
            ?>
                <div class="content">
                    <div class="title">
                        <h3><?php echo $row['title']; ?></h3>
                    </div>
                    <div class="text">
                        <p><?php echo $row['content']; ?></p>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </section>
    <?php
    get_footer();
    ?>