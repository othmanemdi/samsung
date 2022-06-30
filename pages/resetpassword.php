<?php

ob_start();

$title = "Register page";

$errors = [];

if (isset($_POST['reset_password_btn'])) {

    $password = _string($_POST['password']);
    $password_confirm = _string($_POST['password_confirm']);

    if (empty($password) || !preg_match('/^[a-zA-Z0-9_]+$/', $password)) {
        $errors["password"] = "Votre password n'est pas valide";
        $password_class_input = "is-invalid";
        $password_class_feedback = "invalid-feedback";
    } else {
        $password_class_input = "is-valid";
        $password_class_feedback = "valid-feedback";
    }

    if (empty($password_confirm) || ($password !=  $password_confirm)) {
        $errors["password_confirm"] = "Les deux mots de passe ne sont pas identiques";
        $password_confirm_class_input = "is-invalid";
        $password_confirm_class_feedback = "invalid-feedback";
    } else {
        $password_confirm_class_input = "is-valid";
        $password_confirm_class_feedback = "valid-feedback";
    }



    if (empty($errors)) {
        header('Location: login');
        die();
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
                <?= strtoupper("Réinitialiser mon mot de passe"); ?>
            </h3>

            <h5 class="text-center mb-5">
                Veuillez confirmer les deux mot de passe š'il vous plaît
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
                    <label class="form-label" for="password">Mot de passe:</label>

                    <input name="password" type="password" class="form-control <?= $password_class_input ?? "" ?>" id="password" name="password" placeholder="Veuillez saisir votre Mot de passe SVP !">

                    <div class="<?= $password_class_feedback ?? "" ?> fw-bold">
                        <?= $errors['password'] ?? "" ?>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label class="form-label" for="password_confirm">Confirmer le mot de passe:</label>

                    <input name="password_confirm" type="password" class="form-control <?= $password_confirm_class_input ?? "" ?>" id="password_confirm" name="password_confirm" placeholder="Veuillez confirmer le mot de passe SVP !">

                    <div class="<?= $password_confirm_class_feedback ?? "" ?> fw-bold">
                        <?= $errors['password_confirm'] ?? "" ?>
                    </div>
                </div>


                <div class="mt-4">

                    <button class="btn btn-dark" name="reset_password_btn">
                        Confirmer
                    </button>

                    <a href="forgotpassword" class="btn btn-secondary">
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