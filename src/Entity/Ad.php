<?php


include_once __DIR__."/../../vendor/SimpleOrm.class.php";

class Ad extends SimpleOrm {
    public $id;
    public $title;
    public $message;
    public $img;

}