<?php

class Employee 
{
    private $name;
    private $surname;
    public $post;

    public function __construct($name, $surname, Post $post)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->post = $post;
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
        return $this;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function setSurname($surname){
        $this->surname = $surname;
        return $this;
    }
    public function changePost(Post $post) {
        $this->post = $post;
        return $this;
    }

}