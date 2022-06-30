<?php

ob_start();

$title = "Contact page page";

$content_php = ob_get_clean();

ob_start(); ?>
<style>

</style>

<?php $content_css = ob_get_clean();

ob_start(); ?>

<h1>Contact page</h1>

<p>
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis distinctio debitis explicabo iure quo beatae fugiat voluptatibus velit adipisci. Nobis, exercitationem! Quo distinctio doloribus sed eligendi repellendus provident aspernatur nisi!
</p>

<?php $content_html = ob_get_clean();

ob_start(); ?>

<script>
    // alert(123)
</script>

<?php $content_js = ob_get_clean(); ?>