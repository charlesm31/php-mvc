<?php

class Post {

    public $title;
    public $published;

    public function __construct($title, $author, $published) {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }

}

$posts = [
    new Post('My First Post', 'JC', true),
    new Post('My Second Post', 'JC', true),
    new Post('My Third Post', 'CA', true),
    new Post('My Fourth Post', 'HC', false),
];


// Array Filter
$unpublishedPosts = array_filter($posts, function($post) {
    return !$post->published;
});

$publishedPosts = array_filter($posts, function($post) {
    return $post->published;      
});


// Array Map
$mappedPosts = array_map(function($post) {
   $post->published = true;   
   return $post;
}, $posts);


//  Array Column
$titles = array_column($posts, 'title', 'author');
//dd($authors);


require 'views/array-filters.view.php';
