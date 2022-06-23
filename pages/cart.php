<?php

ob_start();

$title = "Cart page";

$content_php = ob_get_clean();

ob_start(); ?>
<style>

</style>

<?php $content_css = ob_get_clean();

ob_start(); ?>

<div class="row">
    <div class="col-md-8">

        <div class="table-responsive">
            <table class="table table-sm table-bordered table-hover table-stripeda">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Quantité</th>
                        <th>Prix</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="images/produits/0.jpg" width="40" alt="">
                        </td>
                        <td>
                            CANAPÉ MARANELLO</td>
                        <td>
                            <input type="number" class="form-control w-25" value="1">
                        </td>
                        <td>10995.00</td>
                        <td>
                            <i class="fas fa-trash-alt text-danger fw-bold"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="images/produits/1.jpg" width="40" alt="">
                        </td>
                        <td>
                            CANAPÉ MARANELLO</td>
                        <td>
                            <input type="number" class="form-control w-25" value="1">
                        </td>
                        <td>10995.00</td>
                        <td>
                            <i class="fas fa-trash-alt text-danger fw-bold"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="images/produits/2.jpg" width="40" alt="">
                        </td>
                        <td>
                            CANAPÉ MARANELLO</td>
                        <td>
                            <input type="number" class="form-control w-25" value="1">
                        </td>
                        <td>10995.00</td>
                        <td>
                            <i class="fas fa-trash-alt text-danger fw-bold"></i>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
    <!-- col 9 -->

    <div class="col-md-4">
        <h4>Payement Summary</h4>

        <div class="bg-light p-4">
            <div class="d-flex mb-3">
                <div class="me-auto">
                    <input type="text" class="form-control w-75" placeholder="COUPON CODE">
                </div>
                <div>
                    <a href="" class="btn btn-dark">Apply</a>
                </div>
            </div>

            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Order Summary:</div>
                    </div>
                    <span class="badge bg-dark rounded-pill">$155.00</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Discount:</div>
                    </div>
                    <span class="badge bg-dark rounded-pill">20%</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Subheading:</div>
                    </div>
                    <span class="badge bg-dark rounded-pill">$129.16</span>
                </li>
            </ul>

            <a href="proced_checkout" class="btn btn-dark mt-3  rounded-pill">PROCED TO CHECKOUT</a>
        </div>
    </div>
    <!-- col 3-->
</div>
<!-- row -->


<?php $content_html = ob_get_clean();

ob_start(); ?>

<script>
    // alert(123)
</script>

<?php $content_js = ob_get_clean(); ?>