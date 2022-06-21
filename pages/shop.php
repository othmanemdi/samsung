<?php

ob_start();

$title = "Shop page";

$content_php = ob_get_clean();

ob_start(); ?>
<style>

</style>

<?php $content_css = ob_get_clean();

ob_start(); ?>

<h1>Shop page</h1>




<div class="row">
    <div class="col-md-3 mb-3">
        <div class="sticky-top">

            <h3 class="mb-3">Catégories</h3>
            <ul class="list-group">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
            </ul>

            <h3 class="mb-3">Marques</h3>
            <ul class="list-group">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
            </ul>

            <h3 class="mb-3">Couleurs</h3>
            <ul class="list-group">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
            </ul>
        </div>

    </div>
    <!-- col -->


    <div class="col-md-9">

        <!-- Catalogue -->
        <div class="row">
            <?php for ($i = 1; $i <= 8; $i++) : ?>
                <div class="col-lg-4 col-md-6 col-sm-6">

                    <div class="card mb-3">
                        <a href="product_details">
                            <img height="300" src="images/products/p<?= $i ?>.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Produit <?= $i ?>.</h5>
                            <div class="mb-3">
                                <b>4 500.00 DH</b> <del class="text-danger fw-bold">5 000.00 DH</del>
                            </div>
                            <a href="cart" class="btn btn-dark">Ajouter au panier</a>
                        </div>
                    </div>
                </div>
                <!-- col -->
            <?php endfor ?>

        </div>
        <!-- fin row catalogue-->

    </div>

    <!-- col -->

</div>


<?php $content_html = ob_get_clean();

ob_start(); ?>

<script>
    // alert(123)
</script>

<?php $content_js = ob_get_clean(); ?>