<?php

ob_start();

$title = "User Update";


if (!isset($_GET['id'])) {
    header('Location: users');
    exit();
}

$id = (int)$_GET['id'];

if ($id === 0) {
    header('Location: users');
    exit();
}



$errors = [];

if (isset($_POST['update_user_btn'])) {

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // exit();

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $date_naissance = $_POST['date_naissance'];

    if (empty($prenom) or !preg_match('/^[a-zA-Z ]+$/', $prenom) or strlen($prenom) < 3) {
        // $errors["prenom"] = "Votre prénome n'est pas valide";
        $errors["prenom"] = "";
        if (empty($prenom)) {
            $errors["prenom"] .= "Veuillez saisir votre prenom SVP ";
        } else {

            if (!preg_match('/^[a-zA-Z]+$/', $prenom)) {
                $errors["prenom"] .= "Veuillez entrer des caractères alphabétique ";
            }
            if (strlen($prenom) < 3) {
                $errors["prenom"] .= "Veuillez entrer plus de 3 caractères ";
            }
        }
        $prenom_class_input = "is-invalid";
        $prenom_class_feedback = "invalid-feedback";
    } else {
        $prenom_class_input = "is-valid";
        $prenom_class_feedback = "valid-feedback";
    }

    if (empty($_POST['nom']) || !preg_match('/^[a-zA-Z ]+$/', $_POST['nom'])) {
        $errors["nom"] = "Votre nom n'est pas valide";
        $nom_class_input = "is-invalid";
        $nom_class_feedback = "invalid-feedback";
    } else {
        $nom_class_input = "is-valid";
        $nom_class_feedback = "valid-feedback";
    }

    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Votre email n'est pas valide";
        $email_class_input = "is-invalid";
        $email_class_feedback = "invalid-feedback";
    } else {
        $email_class_input = "is-valid";
        $email_class_feedback = "valid-feedback";
    }


    if (empty($_POST['date_naissance'])) {
        $errors["date_naissance"] = "Votre date de naissance n'est pas valide";
        $date_naissance_class_input = "is-invalid";
        $date_naissance_class_feedback = "invalid-feedback";
    } else {
        $date_naissance_class_input = "is-valid";
        $date_naissance_class_feedback = "valid-feedback";
    }

    if (empty($errors)) {
        $user = $pdo->prepare("UPDATE users SET 
                nom = :nom,
                prenom = :prenom,
                email = :email,
                date_naissance = :date_naissance
                WHERE id = :id
        ");
        $user->execute(
            [
                'nom' => $nom,
                'prenom' => $prenom,
                'email' => $email,
                'date_naissance' => $date_naissance,
                'id' => $id
            ]
        );
        header('Location: users');
        exit();
    }

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // die();
}


$user = $pdo->query("SELECT * FROM users WHERE id = $id LIMIT 1")->fetch();
$nom = $user->nom;
$prenom = $user->prenom;
$date_naissance = $user->date_naissance;
$email = $user->email;

$full_name = ucfirst($nom) . " " . ucfirst($prenom);

// dd($user);

$content_php = ob_get_clean();

ob_start(); ?>
<style>

</style>

<?php $content_css = ob_get_clean();

ob_start(); ?>

<h1>User Update</h1>




<div class="bg-light p-5 rounded-pilla rounded-3">
    <h3 class="text-center mb-4">
        Modifier <?= $full_name ?>
    </h3>


    <form method="post">

        <div class="mb-3">

            <label class="form-label" for="prenom">
                Prénom:
                (<span class="text-danger">*</span>)
            </label>

            <input name="prenom" type="text" class="form-control 
                     <?= $prenom_class_input ?? "" ?>
                     " id="prenom" placeholder="Veuillez saisir votre prénom SVP !" value="<?= $prenom ?>">

            <div class="<?= $prenom_class_feedback ?? "" ?> fw-bold">
                <?= $errors['prenom'] ?? "" ?>
            </div>

        </div>


        <div class="mb-3">
            <label class="form-label" for="nom">Nom:</label>

            <input name="nom" type="text" class="form-control <?= $nom_class_input ?? "" ?>" id="nom" placeholder="Veuillez saisir votre nom SVP !" value="<?= $nom ?>">

            <div class="<?= $nom_class_feedback ?? "" ?> fw-bold">
                <?= $errors['nom'] ?? "" ?>
            </div>
        </div>

        <div class="form-group mb-3">
            <label class="form-label" for="email">Adresse mail:</label>

            <input name="email" type="email" class="form-control <?= $email_class_input ?? "" ?>" id="email" placeholder="Veuillez saisir votre adresse mail SVP !" value="<?= $email ?>">

            <div class="<?= $email_class_feedback ?? "" ?> fw-bold">
                <?= $errors['email'] ?? "" ?>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label" for="date_naissance">Date de naissance:</label>

            <input name="date_naissance" type="date" class="form-control <?= $date_naissance_class_input ?? "" ?>" id="date_naissance" value="<?= $date_naissance ?>">

            <div class="<?= $date_naissance_class_feedback ?? "" ?> fw-bold">
                <?= $errors['date_naissance'] ?? "" ?>
            </div>
        </div>


        <div class="mt-4">

            <button class="btn btn-dark" name="update_user_btn">
                Enregistrer
            </button>

            <a href="users" class="btn btn-secondary">
                Retour
            </a>

        </div>
    </form>


</div>



<?php $content_html = ob_get_clean();

ob_start(); ?>

<script>
    // alert(123)
</script>

<?php $content_js = ob_get_clean(); ?>