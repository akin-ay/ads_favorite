<?php




if (!isset($_SERVER['PATH_INFO'])) {
    $path="";
}

if (isset($_SERVER['PATH_INFO'])) {
    $path=$_SERVER['PATH_INFO'];
}



/* Si la page de connexion est demandé alors on renvoie un contrôleur */
if ($path==''){
    include __DIR__.'/../src/Controller/HomeController.php';
    index(); //Renvoyer la vue du formulaire de connexion


}

else if($path=='/favorite'){
    include __DIR__.'/../src/Controller/FavoriteController.php';
    index();
 }
 else if($path=='/favorite/add'){
    include __DIR__.'/../src/Controller/FavoriteAddContoller.php';
    add();
 }


else if($path=='/admin/ad'){
   
    include __DIR__.'/../src/Controller/AdminAdController.php';
    index(); 
 }

 else if($path=='/admin/ad/add'){
    include __DIR__.'/../src/Controller/AdminAdController.php';
    save(); 
 }
 else if($path=='/favorite/clear'){
    include __DIR__.'/../src/Controller/FavoriteAddContoller.php';
    clear(); 
 }

else {
    include __DIR__.'/../src/Controller/NotFoundController.php';
    index();
}