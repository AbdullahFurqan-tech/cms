<?php
require 'config.php';
require 'controllers/PostController.php';

$controller = new PostController($pdo);

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $controller->store($_POST['title'], $_POST['content']);
    header("Location: index.php");
    exit;
}

include 'views/header.php';
$title = $content = "";
include 'views/post_form.php';
include 'views/footer.php';

?>