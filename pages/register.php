<?php

ob_start();

$title = "Register page";

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
                Informations personnelles
            </h5>

            <form method="post">


                <div class="mb-3">
                    <label for="prenom" class="form-label">
                        Prénom:
                        (<span class="text-danger">*</span>)
                    </label>
                    <input type="text" class="form-control" name="prenom" placeholder="Votre prénom SVP:">
                </div>


                <div class="mb-3">
                    <label for="nom" class="form-label">
                        Nom:
                        (<span class="text-danger">*</span>)
                    </label>
                    <input type="text" class="form-control" name="nom" placeholder="Votre nom SVP:">
                </div>


                <div class=" mb-3">
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

                <div class="mb-3">
                    <label for="password" class="form-label">
                        Confirmer le mot de passe:
                        (<span class="text-danger">*</span>)
                    </label>
                    <input type="password" class="form-control" name="password_confirme" placeholder=" Confirmer le mot de passe:">
                </div>

                <div class="mt-4">

                    <button class="btn btn-dark">
                        Créer un compte
                    </button>

                    <a href="home" class="btn btn-secondary">
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