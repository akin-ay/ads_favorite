<?php
function add(){
    include __DIR__.'../../Entity/Ad.php';
    
    $id=$_POST['id'];
    $ad = Ad::retrieveByPK($id);

    
    include __DIR__.'../../Entity/Row_ad.php';
    $row_ad =new RowAd();
    $row_ad->ad=$ad;

    include __DIR__.'../../Entity/Cart.php';

    if(isset($_COOKIE['cart'])){
        $texte=$_COOKIE['cart'];
        $cart=json_decode($texte);

        }

        else{
            $cart = new Cart();
            $cart-> rowAd=[];
        } 

        array_push($cart-> rowAd, $row_ad);
        $texte=json_encode($cart);
        setcookie('cart',$texte,-1,'/');
        include __DIR__.'../../../templates/favorite/index.php';
        
    
}

function clear(){
    setcookie("cart",null,-1,'/');
    include __DIR__.'../../../templates/favorite/index.php';
}
?>