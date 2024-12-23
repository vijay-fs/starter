<?php


function dd($value) {
    echo "<pre>";
var_dump($value);
echo "</pre>";

die();
}

// dd($_SERVER["REQUEST_URI"]);
// below content won't executed bcoz we use die()


function urlIs($value) {
    return $_SERVER["REQUEST_URI"] === $value;
};

