<?php

require "functions.php";
require "Database.php";
$config = require "config.php";
$db = new Database($config['database']);

$id = $_GET['id'];
$query = "SELECT * FROM posts WHERE id = :id";

// http://localhost:8000/?id=2 
$posts = $db->query($query, [':id' => $id])->fetch();
dd($posts);
