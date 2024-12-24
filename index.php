<?php

require "functions.php";

// require "router.php";

// connect to our MYSQL database
$dsn = "mysql:host=localhost;port=3306;dbname=phpstarter;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);
$statement = $pdo->prepare("SELECT * FROM posts");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<p>{$post["title"]}</p>";
}