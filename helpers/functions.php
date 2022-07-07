<?php

function _string($value)
{
    return htmlspecialchars(trim(strtolower($value)));
}

function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    die();
}
