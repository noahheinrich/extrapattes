<?php
/* Template Name: Contact */
get_header();

if (isset($_POST['submit']) && !empty($_POST['lastname']) && !empty($_POST['firstname'])) {
    var_dump($_POST);
    $message = 'Nouvelle demande de ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . '';
    wp_mail('gabriel@zeecom.fr', 'Test', $message);
}
?>

<form action="" method="post">
    <fieldset>
        <label>Nom</label>
        <input type="text" name="lastname" placeholder="Nom" required>
    </fieldset>
    <fieldset>
        <label>Prénom</label>
        <input type="text" name="firstname" placeholder="Prénom" required>
    </fieldset>
    <button name="submit">Envoyer</button>
</form>

<?php
get_footer();
?>