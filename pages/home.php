<?php

ob_start();

$title = "Home page";

$content_php = ob_get_clean();

ob_start(); ?>
<style>

</style>

<?php $content_css = ob_get_clean();

ob_start(); ?>


</div>

<div id="carouselExampleDark" class="carousel carousel-dark slide w-75a" data-bs-ride="carousel">
    <div class="carousel-indicators">

        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" aria-current="true" class="active" aria-label="Slide 1"></button>

        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>

        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>

        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>

        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>


    <div class="carousel-inner">

        <div class="carousel-item active" data-bs-interval="2000">
            <img src="images/carousel/1.jpg" class="d-block w-100" style="height: 600px" alt="...">


            <div class="carousel-caption d-none d-md-block bg-light opacity-75">
                <h1>Galaxy Z Fold 3 5G</h1>
                <p class="mt-3">Profitez de 2 ans de protection d’écran et de 3 mois gratuits sur Spotify
                    Premium.</p>
                <div class="mb-3">
                    <a href="" class="btn link text-decoration-underline">En savoir plus</a>
                    <a href="" class="btn btn-dark rounded-pill fw-bold">Acheter maintenant</a>
                </div>

            </div>
            <!-- carousel-caption -->
        </div>
        <!-- carousel-item -->



        <div class="carousel-item" data-bs-interval="2000">
            <img src="images/carousel/2.jpg" class="d-block w-100" style="height: 600px" alt="...">


            <div class="carousel-caption d-none d-md-block bg-light opacity-75">
                <h1>Galaxy S21 FE 5G</h1>
                <p class="mt-3">Obtenez un étui en silicone à l’achat du Galaxy S21 FE</p>
                <div class="mb-3">
                    <a href="" class="btn link text-decoration-underline">En savoir plus</a>
                    <a href="" class="btn btn-dark rounded-pill fw-bold">Acheter maintenant</a>

                </div>
            </div>
            <!-- carousel-caption -->
        </div>
        <!-- carousel-item -->

        <div class="carousel-item" data-bs-interval="2000">
            <img src="images/carousel/3.jpg" class="d-block w-100" style="height: 600px" alt="...">

            <div class="carousel-caption d-none d-md-block bg-light opacity-75">
                <h1>Galaxy Tab S8 | S8+ | S8 Ultra</h1>
                <p class="mt-3">Profitez de performances révolutionnaires au bout des doigts</p>
                <div class="mb-3">
                    <a href="" class="btn link text-decoration-underline">En savoir plus</a>
                    <a href="" class="btn btn-dark rounded-pill fw-bold">Acheter maintenant</a>
                </div>
            </div>
            <!-- carousel-caption -->
        </div>
        <!-- carousel-item -->

        <div class="carousel-item" data-bs-interval="2000">
            <img src="images/carousel/4.jpg" class="d-block w-100" style="height: 600px" alt="...">

            <div class="carousel-caption d-none d-md-block bg-light opacity-75">
                <h1>Galaxy A53 5G</h1>
                <p class="mt-3">Il est là et il est juste Awesome</p>
                <div class="mb-3">
                    <a href="" class="btn link text-decoration-underline">En savoir plus</a>
                    <a href="" class="btn btn-dark rounded-pill fw-bold">Acheter maintenant</a>
                </div>
            </div>
            <!-- carousel-caption -->
        </div>
        <!-- carousel-item -->

        <div class="carousel-item" data-bs-interval="2000">
            <img src="images/carousel/5.jpg" class="d-block w-100" style="height: 600px" alt="...">


            <div class="carousel-caption d-none d-md-block bg-light opacity-75">
                <h1>Galaxy S22 | S22+</h1>
                <p class="mt-3">Profitez d'un an de protection d’écran et de 3 mois gratuits sur Spotify
                    Premium.</p>
                <div class="mb-3">
                    <a href="" class="btn link text-decoration-underline">En savoir plus</a>
                    <a href="" class="btn btn-dark rounded-pill fw-bold">Acheter maintenant</a>
                </div>
            </div>


            <!-- carousel-caption -->
        </div>
        <!-- carousel-item -->

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>



<?php $content_html = ob_get_clean();

ob_start(); ?>

<script>
    // alert(123)
</script>

<?php $content_js = ob_get_clean(); ?>