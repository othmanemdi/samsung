<?php

ob_start();

// $title = "Delete user";
// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
// exit();

$id = (int)$_GET['id'];

if ($id === 0) {
    header('Location: users');
    exit();
}

$user = $pdo->query("SELECT * FROM users WHERE id = $id LIMIT 1")->fetch();

if (!$user) {
    header('Location: users');
    exit();
}


if (isset($_POST['user_delete_btn'])) {
    // $pdo->query("DELETE FROM users WHERE id = $id ");
    $pdo->query("UPDATE users SET is_active = 0 WHERE id = $id ");
    header('Location: users');
    exit();
}




// echo "<pre>";
// print_r($id);
// echo "</pre>";

// echo "<pre>";
// print_r($user);
// echo "</pre>";
// exit();
// echo "<pre>";
// print_r($user);
// echo "</pre>";
// exit();

$content_php = ob_get_clean();

ob_start(); ?>
<style>

</style>

<?php $content_css = ob_get_clean();

ob_start(); ?>

<h1>Delete user id = <?= $id ?></h1>

<ul class="list-group">
    <li class="list-group-item">
        Nom: <?= $user->nom ?>
    </li>

    <li class="list-group-item">
        Prenom: <?= $user->prenom ?>
    </li>

    <li class="list-group-item">
        Date de naissance: <?= $user->date_naissance ?>
    </li>

    <li class="list-group-item">
        Email: <?= $user->email ?>
    </li>
</ul>

<h2 class="text-danger fw-bold mt-3">Voulez vous vraiment supprimer <?= $user->prenom ?> ?</h2>

<form method="POST">
    <button type="submit" class="btn btn-danger" name="user_delete_btn">Supprimer</button>
</form>


<?php $content_html = ob_get_clean();

ob_start(); ?>

<script>
    // alert(123)
</script>

<?php $content_js = ob_get_clean(); ?>