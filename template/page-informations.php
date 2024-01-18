<?php
/* Template Name: Informations */
get_header();
$banner_title = get_field('banner_title');
$banner_image = get_field('banner_image');

$come_title = get_field('come_title');
$come_subtitle = get_field('come_subtitle');
$come_content = get_field('come_content');
$come_button_text = get_field('come_button_text');
$come_infos = get_field('come_infos');

$group_title = get_field('group_title');
$group_content = get_field('group_content');
$group_image = get_field('group_image');
$group_infos = get_field('group_infos');

$goodies_title = get_field('goodies_title');
$goodies_subtitle = get_field('goodies_subtitle');

$faq_title = get_field('faq_title');
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
    <section class="come">
        <div class="h2-title">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vers.svg" alt="" width="100px" height="100px" />
            <h2>
                <?php
                echo $come_title;
                ?>
            </h2>
        </div>
        <div class="container">
            <div class="text">
                <p class="subtitle">
                    <?php
                    echo $come_subtitle;
                    ?>
                </p>
                <p class="content">
                    <?php
                    echo $come_content;
                    ?>
                </p>
            </div>
            <div class="button">
                <a class="button" href="<?php the_field('come_button_link'); ?>">
                    <?php
                    echo $come_button_text;
                    ?>
                </a>
            </div>
            <div class="infos">
                <?php
                echo $come_infos;
                ?>
            </div>
        </div>
    </section>

    <section class="group">
        <div class="h2-title">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/group.svg" alt="" width="100px" height="100px" />
            <h2>
                <?php
                echo $group_title;
                ?>
            </h2>
        </div>
        <div class="container">
            <div class="text">
                <p class="content">
                    <?php
                    echo $group_content;
                    ?>
                </p>
            </div>
            <div class="image">
                <img src="<?php echo $group_image['sizes']['group_banner']; ?>" alt="" width="" height="" />
            </div>
            <div class="infos">
                <?php
                echo $group_infos;
                ?>
            </div>
            <div class="buttons">
                <div class="button">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/formulaire.svg" alt="" width="25px" height="25px" />
                    <a href="">Faire une demande de réservation</a>
                </div>
                <div class="button">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/email.svg" alt="" width="25px" height="25px" />
                    <a href="">Envoyer un e-mail</a>
                </div>
                <div class="button">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact.svg" alt="" width="25px" height="25px" />
                    <a href="">Appeler</a>
                </div>
            </div>
        </div>
    </section>

    <section class="goodies">
        <div class="h2-title">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/produit.svg" alt="" width="100px" height="100px" />
            <h2>
                <?php
                echo $goodies_title;
                ?>
            </h2>
        </div>
        <div class="container">
            <div class="text">
                <p class="subtitle">
                    <?php
                    echo $goodies_subtitle;
                    ?>
                </p>
            </div>
            <div class="products">
                <?php
                $rows = get_field('goodies_products');
                foreach ($rows as $row) {
                    echo '<div class="product">';
                    echo '<img src="' . $row['product_image']['sizes']['product'] . '" alt="" width="" height="" />';
                    echo '<div class="top">';
                    echo '<p class="title">', $row['product_title'], '</p>';
                    echo '<p class="creator">', $row['product_creator'], '</p>';
                    echo '</div>';
                    echo '<div class="bottom">';
                    echo '<p class="price">', $row['product_price'], ' €', '</p>';
                    echo '<p class="disponibility">', $row['product_disponibility'], '</p>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="h2-title">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq.svg" alt="" width="100px" height="100px" />
            <h2>
                <?php
                echo $faq_title;
                ?>
            </h2>
        </div>
        <div class="container">
            <?php
            // $rows = get_field('faq');
            // echo '<pre>';
            // var_dump($rows);
            // echo '</pre>';
            // foreach ($rows as $row) {
            //     echo '<div class="faq-rect">';
            //     echo '<p>', $row['theme'], '</p>';
            //     $questions_answers = get_sub_field('question_answers');
            //     var_dump($questions_answers);
            //     foreach ($questions_answers as $question_answer) {
            //         echo '<div class="content">';
            //         echo '<div class="question">';
            //         echo '<p>', $question_answer['question'], '</p>';
            //         echo '</div>';
            //         echo '<div class="answer">';
            //         echo '<p>', $question_answer['answer'], '</p>';
            //         echo '</div>';
            //         echo '</div>';
            //     }
            //     echo '</div>';
            // }
            ?>
        </div>
    </section>
</div>

<?php
get_footer();
?>