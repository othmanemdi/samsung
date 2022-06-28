<?php

ob_start();

$title = "Login page";

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
                CRÉER UN NOUVEAU COMPTE CLIENT
            </h3>

            <h5 class="text-center">
                SE CONNECTER
            </h5>


            <form method="post">

                <div class="mb-3">
                    <label for="email" class="form-label">
                        Adresse mail:
                        (<span class="text-danger">*</span>)
                    </label>
                    <input type="email" class="form-control" name="email" placeholder="name@example.com">
                </div>


                <div class="mb-3">
                    <label for="password" class="form-label">
                        Mot de passe:
                        (<span class="text-danger">*</span>)
                    </label>
                    <input type="password" class="form-control" name="password" placeholder="Mot de passe:">
                </div>



                <div class="d-flex mb-3">
                    <div class="me-auto p-2">
                        <button class="btn btn-dark">
                            Connexion
                        </button>
                    </div>
                    <div class="p-2">
                        <a href="" class="text-dark">
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