<?php

ob_start();

$title = "Register page";

$errors = [];

if (isset($_POST['forgot_password_btn'])) {

    $email = $_POST['email'];

    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Votre email n'est pas valide";
        $email_class_input = "is-invalid";
        $email_class_feedback = "invalid-feedback";
    } else {
        $email_class_input = "is-valid";
        $email_class_feedback = "valid-feedback";
    }


    if (empty($errors)) {

        header('Location: resetpassword');
        die();
        //     echo "S'il y a un compte associé à l’adresse othmane.mezgueldi@gmail.com, vous recevrez un email avec un lien pour réinitialiser votre mot de passe.";
        //     die();

        //     echo "Nous avons reçu trop de demandes de réinitialisation de mot de passe. Veuillez patienter et réessayer plus tard ou contacter service.client@samsung.com.";
    }


    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // die();
}

$content_php = ob_get_clean();

ob_start(); ?>
<style>

</style>

<?php $content_css = ob_get_clean();

ob_start(); ?>


<div class="row justify-content-md-center ">
    <div class="col-6">

        <div class="bg-light p-5 rounded-pilla rounded-3">
            <h3 class="text-center mb-5">
                MOT DE PASSE OUBLIÉ?
            </h3>

            <h5 class="text-center mb-5">
                Veuillez entrer votre adresse email ci-dessous pour recevoir un lien de réinitialisation de mot de passe.
            </h5>


            <?php if (!empty($errors)) : ?>
                <div class="alert alert-danger mb-3" role="alert">
                    <h5 class="text-danger fw-bold">
                        Vous n'avez pas rempli le formulaire correctement
                    </h5>

                    <ul class="list-group list-group-flush">
                        <?php foreach ($errors as $key => $m) : ?>
                            <li class="list-group-item bg-transparent">
                                <b><?= ucfirst($key) ?>:</b> - <?= $m ?>
                            </li>
                        <?php endforeach ?>

                    </ul>
                </div>
            <?php endif ?>

            <form method="post">

                <div class="form-group mb-3">
                    <label class="form-label" for="email">Adresse mail:</label>

                    <input name="email" type="email" class="form-control <?= $email_class_input ?? "" ?>" id="email" placeholder="Veuillez saisir votre adresse mail SVP !" value="<?= $_POST['email'] ?? "" ?>">

                    <div class="<?= $email_class_feedback ?? "" ?> fw-bold">
                        <?= $errors['email'] ?? "" ?>
                    </div>
                </div>

                <div class="mt-4">

                    <button class="btn btn-dark" name="forgot_password_btn">
                        Réinitialiser mon mot de passe
                    </button>

                    <a href="login" class="btn btn-secondary">
                        Retour
                    </a>

                </div>
            </form>


        </div>
    </div>

</div>




<?php $content_html = ob_get_clean();

ob_start(); ?>

<script>
    // alert(123)
</script>

<?php $content_js = ob_get_clean(); ?>