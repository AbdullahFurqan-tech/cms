<?php
require_once __DIR__ . '/../models/Post.php';


class PostController
{
    private $postModel;

    public function __construct($pdo)
    {
        $this-> postModel =new Post($pdo);
    }

    public function index()
    {
        return $this->postModel->getAll();
    }

    public function store($title, $content)
    {
        return $this->postModel->create($title, $content);
    }

    public function edit($id)
    {
        return $this->postModel->get($id);
    }

    public function update($id, $title, $content)
    {
        return $this->postModel->update($id, $title, $content);
    }

    public function destroy($id)
    {
        return $this->postModel->delete($id);
    }

}



?>