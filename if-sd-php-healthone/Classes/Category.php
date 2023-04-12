<?php


class Category
{
    public $id;
    public $name;
    public $picture;
    public $imgname;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}