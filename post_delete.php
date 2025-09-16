<?php
require 'config.php';
require 'controllers/PostController.php';

$controller = new PostController($pdo);

if(isset($_GET['id']))
{
    $controller->destroy($_GET['id']);
}

header("Location: index.php");
exit;