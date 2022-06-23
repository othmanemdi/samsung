<?php

ob_start();

$title = "Product Details page";

if (isset($_GET["id"])) {
    $id = (int)$_GET["id"];
} else {
    header('Location: shop');
    die();
}

if ($id === 0) {
    header('Location: shop');
    die();
}


$content_php = ob_get_clean();

ob_start(); ?>
<style>

</style>

<?php $content_css = ob_get_clean();

ob_start(); ?>

<h1>Product Details page</h1>

<div class="row">
    <div class="col-md-6">
        <img width="500" src="images/products/p<?= $id ?>.jpg" alt="">
    </div>
    <!-- col -->

    <div class="col-md-6">
        <h3>
            Product N° <?= $id ?>
        </h3>

        <div class="text-warning">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>

        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam exercitationem laboriosam assumenda
            aspernatur necessitatibus facere, autem itaque porro distinctio rem adipisci deleniti quia deserunt
            mollitia cum repellat dolor iure nesciunt.
        </p>

        <form method="post">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="qt">Quantités:</label>
                        <input type="number" class="form-control" value="1">
                    </div>
                </div>
                <!-- col -->

                <div class="col">
                    <div class="form-group">
                        <label for="qt">Couleurs:</label>
                        <select class="form-select">
                            <option>Rouge</option>
                            <option>Jaune</option>
                            <option>Noir</option>
                            <option>Blanc</option>
                        </select>
                    </div>
                </div>
                <!-- col -->
            </div>
            <!-- row -->

            <div class="mt-3">
                <h3 class="fw-bold">
                    $10995.00
                    <del class="text-danger">
                        $12995.00
                    </del>
                </h3>
            </div>

            <a href="cart" class="btn btn-dark mt-2">
                <i class="fas fa-shopping-cart"></i>
                Ajouter au panier
            </a>

        </form>

    </div>
    <!-- col -->
</div>
<!-- row -->

<?php $content_html = ob_get_clean();

ob_start(); ?>

<script>
    // alert(123)
</script>

<?php $content_js = ob_get_clean(); ?>