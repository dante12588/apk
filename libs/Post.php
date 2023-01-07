<?php

class Post{

    private $title,
            $content,
            $category,
            $date,
            $image_url,
            $status,
            $db;

    public function __construct($title, $content, $category, $image_url, $status){
        $this->title = $title;
        $this->content = $content;
        $this->category = $category;
        $this->image_url = $image_url;
        $this->status = $status;
    }

}