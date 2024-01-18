<?php
/* Template Name: Activities */
get_header();
$banner_title = get_field('banner_title');
$banner_image = get_field('banner_image');
$introduction = get_field('introduction');
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
    <section class="introduction">
        <div class="image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Label_carre.png" alt="" width="150px" height="150px" />
        </div>
        <div class="content">
            <p>
                <?php
                echo $introduction;
                ?>
            </p>
        </div>
    </section>
    <section class="filter">
        <div class="button">
            <p class="winter">Activités hiver</p>
            <p class="others">Activités 4 saisons</p>
        </div>
    </section>
    <section class="activities">
        <div class="grid">
            <?php
            $rows = get_field('activities');
            foreach ($rows as $row) {
            ?>
                <div class="scene scene--card">
                    <div class="card">
                        <div class="card__face card__face--front">
                            <div class="top">
                                <div class="image">
                                    <img src="<?php echo $row['image']['sizes']['activity']; ?>" alt="" width="" height="" />
                                </div>
                                <div class="title">
                                    <h2><?php echo $row['title']; ?></h2>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="description">
                                    <div class="title">
                                        <p class="subtitle"><?php echo $row['description'] ?></p>
                                        <p class="place"><?php echo $row['place'] ?></p>
                                    </div>
                                    <div class="info">
                                        <div class="age">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Groupe1.svg" alt="" width="25px" height="25px" />
                                            <p><?php echo $row['age'] ?></p>
                                        </div>
                                        <div class="season">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vers2.svg" alt="" width="25px" height="25px" />
                                            <p><?php echo $row['season'] ?></p>
                                        </div>
                                        <div class="time">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Heure1.svg" alt="" width="25px" height="25px" />
                                            <p><?php echo $row['time'] ?></p>
                                        </div>
                                        <div class="difficulty">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/personne2.svg" alt="" width="25px" height="25px" />
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/<?php echo $row['difficulty'] ?>.svg" alt="" width="" height="12px" />
                                        </div>
                                    </div>
                                </div>
                                <div class="bar">
                                </div>
                                <div class="tariff">
                                    <div class="menu">
                                        <h3> Tarifs </h3>
                                        <button><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Arrow5.svg" alt="" width="" height="" /></button>
                                    </div>
                                    <div class="content">
                                        <p>
                                            <?php echo $row['price_content'] ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <button>En savoir +</button>
                                    <a href="<?php echo $row['booking']; ?>">Réserver</a>
                                </div>
                            </div>
                        </div>
                        <div class="card__face card__face--back">
                            <div class="back">
                            <?php
                            if ($row['activity_condition'] != null) {
                            ?>
                                <div class="condition">
                                    <p><?php echo $row['activity_condition'] ?></p>
                                </div>
                            <?php
                            }
                            ?>
                            <div class="description">
                                <p><?php echo $row['activity_description'] ?></p>
                            </div>
                            <div class="buttons">
                                <a class="condition-button" href="<?php the_field('condition_link'); ?>">Conditions d'activités</a>
                                <a href="<?php echo $row['booking']; ?>">Réserver</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
</div>


<?php
get_footer();
?>