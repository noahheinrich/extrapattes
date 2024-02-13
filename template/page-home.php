<?php
/* Template Name: Home */
get_header();
$title = get_field('title');
$image = get_field('background');
$intro_title = get_field('intro_title');
$intro_text = get_field('introduction');
$news_title = get_field('news_title');
$gallery_title = get_field('gallery_title');
$advices_title = get_field('advice_title');
$advices_button = get_field('advice_button');

?>

<section class="banner">
    <div class="container" style="background-image: url(<?php echo ($image['sizes']['background']); ?>);">

        <h1 class="title">
            <?php
            echo $title;
            ?>
        </h1>

        <img class="label" src="<?php echo get_stylesheet_directory_uri(); ?>/images/label.png" alt="" width="" height="" />
        <a href="<?php the_field('header_button'); ?>">Réservez votre escapade</a>
    </div>
</section>
<div class="wrap">
    <section class="intro">
        <div class="intro-image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img.jpg" alt="Les chiens de traîneau, vos super héros" />
        </div>
        <div class="intro-text">
            <p class="bold"><?php echo $intro_title; ?></p>
            <p class="content"><?php echo $intro_text; ?></p>
            <a class="intro-button" href="<?php the_field('intro_button'); ?>">En savoir plus</a>
        </div>
        <div class="intro-paw">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pate.svg" alt="Paw Print" />
        </div>
    </section>
    <section class="news">
        <div class="h2-title">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/annonce.svg" alt="" width="100px" height="100px" />
            <h2>
                <?php
                echo $news_title;
                ?>
            </h2>
        </div>
        <div class="container">
            <?php
            $rows = get_field('news');
            foreach ($rows as $row) {
                echo '<div class="news-rect">';
                echo '<img src="' . $row['news_background']['sizes']['news_background'] . '" alt="">';
                echo '<p class="title">', $row['news_information'], '</p>';
                echo '<br>';
                echo '<p class="content">', $row['news_content'], '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </section>

    <section class="gallery">
        <div class="h2-title">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image19.svg" alt="" width="" height="" />
            <h2>
                <?php
                echo $gallery_title;
                ?>
            </h2>
        </div>
        <div class="gallery-container">
            <?php
            $images = get_field('gallery');
            $nb = round(count($images) / 3);

            if ($images) {
                for ($i = 0; $i <= 2; $i++) {
                    for ($j = 0; $j < $nb; $j++) {
                        $col[$i][] = $images[$j + $i * $nb];
                    }
                }

                for ($i = 0; $i <= 2; $i++) {
                    echo '<div class="gallery-column">';
                    echo '<div class="gallery-column-original">';
                    foreach ($col[$i] as $image) {
                        echo '<img src="' . $image['sizes']['gallery'] . '" alt="' . $image['alt'] . '" />';
                    }
                    echo '</div>';
                    echo '<div class="gallery-column-clone">';
                    foreach ($col[$i] as $image) {
                        echo '<img src="' . $image['sizes']['gallery'] . '" alt="' . $image['alt'] . '" />';
                    }
                    echo '</div>';

                    echo '</div>';
                }
            }
            ?>
        </div>
    </section>

    <section class="advice">
        <div class="h2-title">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/avis1.svg" alt="" width="" height="" />
            <h2>
                <?php
                echo $advices_title;
                ?>
            </h2>
        </div>
        <div class="container">
            <?php
            $rows = get_field('advices');
            foreach ($rows as $row) {
                echo '<div class="advice-rect">';
                echo '<div class="top">';
                echo '<p class="name">', $row['name'], '</p>';
                echo '<br>';
                $stars = $row['stars'];
                echo '<div class="stars">';
                    echo '<div class="first-stars">';
                        echo '<img src="' . get_stylesheet_directory_uri() . '/images/starsgris.jpg" alt="" width="" height="" />';
                    echo '</div>';
                    echo '<div class="second-stars" style="width:', $stars * 20,'%">';
                        echo '<img src="' . get_stylesheet_directory_uri() . '/images/starsjaune.jpg" alt="" width="" height="" />';
                    echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<br>';
                echo '<p class="content">', $row['advice_content'], '</p>';
                echo '<br>';
                echo '<div class="date-container">';
                echo '<p class="date">', $row['date'], '</p>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
        <div class="advice-button">
            <a href="<?php echo $advices_button; ?>">Donner son avis</a>
        </div>
    </section>
</div>
<?php
get_footer();
?>