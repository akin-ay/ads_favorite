<?php

function index(){
    include __DIR__.'../../Entity/Ad.php';
    $ads = Ad::all();

    include __DIR__.'../../../templates/favorite/index.php';

}