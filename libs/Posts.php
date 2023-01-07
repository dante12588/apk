<?php

class Posts{

    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getPosts(){
        $this->db->query('SELECT * from posts');
        return $this->db->getResult();
    }

    public function  addPost($title, $content, $category, $image = ''){
        $this->db->query("INSERT INTO posts (title, content, category_id, image, status) VALUES (:title, :content, :category, :image, 'published')");
        $this->db->bind(':title', $title);
        $this->db->bind(':content', $content);
        $this->db->bind(':category', $category);
        $this->db->bind(':image', $image);
        $this->db->exec();
    }
}