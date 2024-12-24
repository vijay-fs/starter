<?php

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];


$routes=[
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/contact" => "controllers/contact.php",
    "/notes" => "controllers/notes.php",
    "/note" => "controllers/note.php",
];

function abourt($code = 404) {
    http_response_code($code);
    require "views/{$code}.view.php";
}

function routToController($uri, $routes) {
    if(array_key_exists($uri, $routes)){
    require $routes[$uri];
} else {
   abourt();
}
};

routToController($uri, $routes);