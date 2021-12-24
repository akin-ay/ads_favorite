<?php

function index(){
    include __DIR__.'/../../templates/admin_ad/index.php';
}

function save(){

    $title=$_POST['title'];
    $message=$_POST['message'];
    $img=$_POST['img'];

    
    include __DIR__.'../../Entity/Ad.php';
    $ad=new Ad();
    $ad->title=$title;
    $ad->message=$message;
    $ad->img=$img;


    $ad->save();
    echo "votre annonce à bien été enregistré";
    }

