<?php
require 'config.php';
require 'controllers/PostController.php';

$controller = new PostController($pdo);
$post = $controller->index();

include 'views/header.php';
include 'views/post_list.php';
include 'views/footer.php';

?>