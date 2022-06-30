<?php

ob_start();

$title = "Login page";


$errors = [];
if (isset($_POST['login'])) {

    // $email = htmlspecialchars(strtolower(trim($_POST['email'])));
    // $password = htmlspecialchars(strtolower(trim($_POST['password'])));

    $email = _string($_POST['email']);
    $password = _string($_POST['password']);

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Votre email n'est pas valide";
        $email_class_input = "is-invalid";
        $email_class_feedback = "invalid-feedback";
    } else {
        $email_class_input = "is-valid";
        $email_class_feedback = "valid-feedback";
    }

    if (empty($password) || !preg_match('/^[a-zA-Z0-9_-]+$/', $password)) {
        $errors["password"] = "Votre password n'est pas valide";
        $password_class_input = "is-invalid";
        $password_class_feedback = "invalid-feedback";
    } else {
        $password_class_input = "is-valid";
        $password_class_feedback = "valid-feedback";
    }


    if (empty($errors)) {
        // echo "Ok";
        // die();
    }
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



            <h3 class="text-center mb-4">
                SE CONNECTER
            </h3>


            <h5 class="text-center">
                Clients enregistrés
            </h5>
            <p class="text-center">
                Si vous avez un compte, connectez-vous avec votre adresse email.
            </p>

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


                <div class="form-group mb-3">
                    <label class="form-label" for="password">Mot de passe:</label>

                    <input name="password" type="password" class="form-control <?= $password_class_input ?? "" ?>" id="password" name="password" placeholder="Veuillez saisir votre Mot de passe SVP !">

                    <div class="<?= $password_class_feedback ?? "" ?> fw-bold">
                        <?= $errors['password'] ?? "" ?>
                    </div>
                </div>


                <div class="d-flex mb-3">
                    <div class="me-auto p-2">
                        <button class="btn btn-dark" name="login">
                            Connexion
                        </button>
                    </div>
                    <div class="p-2">
                        <a href="forgotpassword" class="text-dark">
                            Mot de passe oublier:
                        </a>
                    </div>
                </div>

            </form>


            <h5 class="text-center mt-4">Nouveaux clients</h5>


            <hr>

            <p class="text-center">
                La création d’un compte a de nombreux avantages : consultation rapide, sauvegarder plusieurs adresses, suivre les commandes, et bien plus encore.
            </p>

            <div class="d-flex justify-content-center">
                <a href="register" class="btn btn-dark text-white mt-4 text-center">Créer un compte</a>
            </div>
        </div>
    </div>

</div>



<?php $content_html = ob_get_clean();

ob_start(); ?>

<script>
    // alert(123)
</script>

<?php $content_js = ob_get_clean(); ?>