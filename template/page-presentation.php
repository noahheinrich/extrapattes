<?php
/* Template Name: Presentation */
get_header();

$banner_title = get_field('banner_title');
$banner_image = get_field('banner_image');

$values_title = get_field('values_title');
$values_introduction = get_field('values_introduction');

$story_title = get_field('story_title');
$story_text1 = get_field('text1');
$story_image1 = get_field('image1');
$story_title2 = get_field('title_text2');
$certifications = get_field('certifications');
$story_text3 = get_field('text3');
$story_text4 = get_field('text4');
$story_image2 = get_field('image2');

$team_title = get_field('team_title');
$team_name = get_field('team_name');
$team_description = get_field('team_description');
$team_image = get_field('team_image');
$team_quote = get_field('team_quote');

$sponso_title = get_field('sponso_title');


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
    <section class="values">
        <div class="h2-title">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/valeur.svg" alt="" width="100px" height="100px" />
            <h2>
                <?php
                echo $story_title;
                ?>
            </h2>
        </div>
        <div class="container">
            <div class="intro">
                <p>
                    <?php
                    echo $values_introduction;
                    ?>
                </p>
            </div>
            <div class="container_values">
                <div class="images">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/respect1.svg" alt="" width="250px" height="250px" />
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/connexion1.svg" alt="" width="250px" height="250px" />
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/equipe2.svg" alt="" width="250px" height="250px" />
                </div>
                <div class="texts">
                    <?php
                    $rows = get_field('values');
                    foreach ($rows as $row) {
                        echo '<p>', $row['text_value'], '</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="story">
        <div class="h2-title">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/plume_histoire.svg" alt="" width="100px" height="100px" />
            <h2>
                <?php
                echo $values_title;
                ?>
            </h2>
        </div>
        <div class="container">
            <div class="text1">
                <div class="text">
                    <p>
                        <?php
                        echo $story_text1;
                        ?>
                    </p>
                </div>
                <div class="image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Ellipse1.svg" alt="" width="210px" height="245px" />
                    <img src="<?php echo ($story_image1['sizes']['presentation']); ?>" alt="" />
                </div>
            </div>
            <div class="text2">
                <div class="image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Ellipse3.svg" alt="" width="360px" height="215px" />
                    <div class="content">
                        <p class="title">

                            <?php
                            echo $story_title2;
                            ?>
                        </p>

                        <p class="list">
                            <?php
                            echo $certifications;
                            ?>
                        </p>
                    </div>

                </div>
                <div class="text">
                    <p>
                        <?php
                        echo $story_text3;
                        ?>
                    </p>
                </div>
            </div>
            <div class="text3">
                <div class="text">
                    <p>
                        <?php
                        echo $story_text4;
                        ?>
                    </p>
                </div>
                <div class="image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Ellipse3.svg" alt="" width="350px" height="240px" />
                    <img src="<?php echo ($story_image2['sizes']['presentation2']); ?>" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="h2-title">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/equipe.svg" alt="" width="100px" height="100px" />
            <h2>
                <?php
                echo $team_title;
                ?>
            </h2>
        </div>
        <div class="presentation">
            <div class="scene scene--card" style="transform: rotate(1deg);">
                <div class="card">
                    <div class="card__face card__face--front">
                        <div class="image">
                            <img src="<?php echo ($team_image['sizes']['card']); ?>" alt="" />
                        </div>
                        <div class="text">
                            <p>
                                <?php
                                echo $team_name;
                                ?>
                            </p>
                        </div>
                    </div>

                    <div class="card__face card__face--back" style="background-image: url(<?php echo ($team_image['sizes']['full_card']); ?>);">
                        <div class="image" style="background-image: url('<?php echo $team_image['sizes']['full_card']; ?>');"></div>
                        <div class="title">
                            <?php
                            echo '<p>', $team_name, '</p>';
                            ?>
                        </div>
                        <div class="text">
                            <?php
                            echo '<p class="description">', $team_description, '</p>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="quote">
                <p>
                    <?php
                    echo $team_quote;
                    ?>
                </p>
            </div>
        </div>
        <div class="container">
            <?php
            $rows = get_field('team_presentation');
            foreach ($rows as $row) {
                $randomDegree = rand(-5, 5);
            ?>
                <div class="scene scene--card" style="transform: rotate(<?php echo $randomDegree; ?>deg);">
                    <div class="card">
                        <div class="card__face card__face--front">
                            <div class="image">
                                <img src="<?php echo $row['dog_picture']['sizes']['card']; ?> " alt="">
                            </div>
                            <div class="text">
                                <?php
                                echo '<p>', $row['dog_name'], '</p>';
                                ?>
                            </div>
                        </div>
                        <div class="card__face card__face--back">
                            <div class="image" style="background-image: url('<?php echo $team_image['sizes']['full_card']; ?>');"></div>
                            <div class="title">
                                <?php
                                echo '<p>', $row['dog_name'], '</p>';
                                ?>
                            </div>
                            <div class="text">
                                <?php
                                echo '<p class="nickname">', $row['dog_nickname'], '</p>';
                                echo '<p class="description">', $row['dog_description'], '</p>';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>

    <section class="sponsors">
        <div class="h2-title">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feuille.svg" alt="" width="100px" height="100px" />
            <h2>
                <?php
                echo $sponso_title;
                ?>
            </h2>
        </div>
        <div class="container">
            <?php
            $rows = get_field('sponso');
            foreach ($rows as $row) {
                echo '<div class="sponsor-rect">';
                echo '<a href="'. $row['logo_link'] .'"><img src="' . $row['sponso_logo']['sizes']['sponsor'] . '" alt="" /></a>';
                echo '</div>';
            }
            ?>
    </section>
</div>

<?php
get_footer();
?>