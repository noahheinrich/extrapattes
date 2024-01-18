<?php
/* Template Name: Contact */
get_header();

if (isset($_POST['submit']) && !empty($_POST['lastname']) && !empty($_POST['firstname'])) {
    var_dump($_POST);
    $message = 'Nouvelle demande de ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . '';
    wp_mail('gabriel@zeecom.fr', 'Test', $message);
}

$banner_title = get_field('banner_title');
$banner_image = get_field('banner_image');

$coord_title = get_field('coord_title');
$coord_name = get_field('coord_name');
$coord_place = get_field('coord_place');
$coord_mail = get_field('coord_mail');
$coord_phone = get_field('coord_phone');
$coord_insta = get_field('coord_insta');
$coord_facebook = get_field('coord_facebook');
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
    <div class="page">
        <section class="coords">
            <div class="h2-title">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/coordonnee.svg" alt="" width="100px" height="100px" />
                <h2>
                    <?php
                    echo $coord_title;
                    ?>
                </h2>
            </div>
            <div class="container">
                <div class="name">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/personnage.svg" alt="" width="50px" height="50px" />
                    <?php
                    echo $coord_name;
                    ?>
                </div>
                <div class="place">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vers.svg" alt="" width="50px" height="50px" />
                    <?php
                    echo $coord_place;
                    ?>
                </div>
                <div class="mail">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/email.svg" alt="" width="50px" height="50px" />
                    <?php
                    echo $coord_mail;
                    ?>
                </div>
                <div class="phone">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact.svg" alt="" width="50px" height="50px" />
                    <?php
                    echo $coord_phone;
                    ?>
                </div>
                <div class="insta">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram.svg" alt="" width="50px" height="50px" />
                    <?php
                    echo $coord_insta;
                    ?>
                </div>
                <div class="facebook">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.svg" alt="" width="50px" height="50px" />
                    <?php
                    echo $coord_facebook;
                    ?>
                </div>
            </div>
        </section>

        <section class="form">
            <div class="h2-title">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/formulaire.svg" alt="" width="100px" height="100px" />
                <h2>
                    FORMULAIRE
                </h2>
            </div>
            <div class="form-container">
                <form action="" method="post">
                    <div class="form-group-inline">
                        <div class="form-group">
                            <input type="text" placeholder="Prénom" required>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Nom" required>
                        </div>
                    </div>
                    <div class="form-group-inline">
                        <div class="form-group">
                            <input type="email" placeholder="E-mail*" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" placeholder="Téléphone*" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Objet">
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Message" rows="5"></textarea>
                    </div>
                    <div class="button">
                        <button type="submit" name="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>

<?php
get_footer();
?>