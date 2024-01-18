<?php
/* Template Name: Conditions */
get_header();
$banner_title = get_field('banner_title');
$banner_image = get_field('banner_image');

$winter_title = get_field('winter_title');

$seasons_title = get_field('seasons_title');

var_dump(get_the_id());
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
<div class="conditions">
    <div class="wrap">
        <section class="winter">
            <div class="h2-title">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/winter.svg" alt="" width="100px" height="100px" />
                <h2>
                    <?php
                    echo $winter_title;
                    ?>
                </h2>
            </div>
            <div class="container">
                <?php
                $rows = get_field('winter_content');
                foreach ($rows as $row) :
                ?>
                    <div class="content">
                        <div class="title">
                            <h3><?php echo $row['subtitle']; ?></h3>
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
        <section class="seasons">
            <div class="h2-title">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/seasons.svg" alt="" width="100px" height="100px" />
                <h2>
                    <?php
                    echo $seasons_title;
                    ?>
                </h2>
            </div>
            <div class="container">
                <?php
                $rows = get_field('seasons_content');
                foreach ($rows as $row) :
                ?>
                    <div class="content">
                        <div class="title">
                            <h3><?php echo $row['subtitle']; ?></h3>
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
    </div>
</div>


<?php
get_footer();
?>