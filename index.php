<?php

require "functions.php";
require "Database.php";
$config = require "config.php";
$db = new Database($config['database']);

$posts = $db->query("SELECT * FROM posts")->fetch();
dd($posts['title']);
