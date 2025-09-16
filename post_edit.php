<?php
require 'config.php';
require 'controllers/PostController.php';

$controller = new PostController($pdo);

if(!isset($_GET['id']))
{
    die("post id missing");
}

$post  = $controller->edit($_GET['id']);

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $controller->update($_GET['id'], $_POST['title'], $_POST['content']);
    header("Location: index.php");
    exit;
}

include 'views/header.php';
$title =  $post['title'];
$content = $post['content'];
include 'views/post_form.php';
include 'views/footer.php';

?>