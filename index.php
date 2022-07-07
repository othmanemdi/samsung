<?php

if (isset($_GET['page']) && preg_match("/^[a-zA-Z0-9_-]*$/", $_GET['page'])) {
    $page = htmlspecialchars(trim($_GET['page']));
} else {
    $page = "home";
}

$pages = scandir('pages/');


$page_file = $page . ".php";

require_once "database/db.php";

require_once "helpers/functions.php";

// dd($pdo);





if (in_array($page_file, $pages)) {
    require_once 'pages/' . $page_file;
    // echo "Ok ";
} else {
    require_once 'pages/404.php';
    // echo "Pas Ok ";
}
// echo "<br>";

// echo $content_php ?? " Test";
// echo "<br>";

// echo $content_css;
// echo "<br>";

// echo $content_html;
// echo "<br>";

// echo $content_js;
// die();




echo $content_php ?? "";

?>
<!doctype html>
<html lang="en">

<head>
    <?php require_once "pages/body/head.php"; ?>
    <?= $content_css ?? ""; ?>
    <?php require_once "pages/body/script.php"; ?>
</head>

<body>
    <?php require_once "pages/body/nav.php"; ?>

    <div class="container mt-5">
        <?= $content_html ?? "" ?>
    </div>

    <?= $content_js ?? ""; ?>

    <?php require_once "pages/body/footer.php"; ?>
</body>

</html>