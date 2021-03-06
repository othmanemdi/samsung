<?php

ob_start();

$title = "Users page";
// select nom AS last_name,prenom AS first_name from users
$users = $pdo->query("SELECT * FROM users WHERE is_active = 1 ORDER BY id desc")->fetchAll();

$content_php = ob_get_clean();

ob_start(); ?>
<style>

</style>

<?php $content_css = ob_get_clean();

ob_start(); ?>

<h1>List of users</h1>

<?php if (isset($_GET['message_text']) && isset($_GET['message_color'])) : ?>
    <div class="alert alert-<?= $_GET['message_color'] ?>">
        <?= $_GET['message_text'] ?>
    </div>

<?php endif ?>

<a href="users_add" class="btn btn-primary mb-3">Add</a>

<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover table-sm">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Date de naissance</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $key => $u) : ?>
                <tr>
                    <td>
                        <?= $u->id ?>
                    </td>
                    <td>
                        <?= $u->nom ?>
                    </td>
                    <td>
                        <?= $u->prenom ?>
                    </td>

                    <td>
                        <?= $u->date_naissance ?>
                    </td>

                    <td>
                        <?= $u->email ?>
                    </td>
                    <td>
                        <a href="user_update&id=<?= $u->id ?>" class="btn btn-dark btn-sm">Update</a>
                        <a href="user_delete&id=<?= $u->id ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>






<?php $content_html = ob_get_clean();

ob_start(); ?>

<script>
    // alert(123)
</script>

<?php $content_js = ob_get_clean(); ?>