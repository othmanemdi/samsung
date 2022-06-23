<?php

ob_start();

$title = "Order Confirmed";

$content_php = ob_get_clean();

ob_start(); ?>
<style>

</style>

<?php $content_css = ob_get_clean();

ob_start(); ?>

<h1>Order Confirmed</h1>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index">Home</a></li>
        <li class="breadcrumb-item"><a href="cart">Cart</a></li>
        <li class="breadcrumb-item"><a href="proced_checkout">Proced to checkout</a></li>
        <li class="breadcrumb-item active" aria-current="page">Order Confirmed</li>
    </ol>
</nav>


<div class="alert alert-success h2 p-4" role="alert">
    <i class="fa-solid fa-circle-check text-success"></i> Your order is confirmed
</div>

<p>
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur fugit doloribus eveniet possimus
    dolores, rerum pariatur maxime voluptatem odit? Quos ducimus eius quam quod alias numquam amet velit modi.
    Id.
    Nihil eius assumenda officiis? Possimus ex ratione et voluptatem autem! Magni, delectus. Ad consequuntur
    omnis porro hic itaque reiciendis at debitis dolor eligendi natus, delectus dolore incidunt ut ea eos?
</p>

<a href="shop" class="btn btn-outline-dark btn-lg mt-2">
    <i class="fa-solid fa-circle-chevron-left"></i>
    Return to shop page</a>

</div>



<?php $content_html = ob_get_clean();

ob_start(); ?>

<script>
    // alert(123)
</script>

<?php $content_js = ob_get_clean(); ?>