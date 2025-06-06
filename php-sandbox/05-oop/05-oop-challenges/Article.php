<?php

class Article
{
    public $title;
    public $content;
    private $published = false;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function publish() {
        $this->published = true;
    }

    public function isPublished() {
        return $this->published;
    }
}

$articleOne = new Article('Know everything about games', 'Lorem Ipsum');
$articleTwo = new Article('Learn how to make waffles', 'Lorem Ipsum');

$articleOne->publish();

var_dump($articleOne->isPublished());
var_dump($articleTwo->isPublished());



