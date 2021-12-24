<?php
include __DIR__ . '/../../templates/header.php';
?>

<h1>Les annonces ajoutées en favoris</h1>

<br>

<?php if (isset($_COOKIE['cart'])) {
    $cart = json_decode($_COOKIE['cart']);

?>
<br>
<a class="btn btn-danger" href="/favorite/clear">Clear all</a>
    <hr>
    <?php foreach ($cart->rowAd as $row) {
    ?>

<center><div style="width: 400px;background-color :beige; ">
<div><h4><?= $row->ad->title ?></h4></div>
<div><img style="width : 200px" src="<?= $row->ad->img ?>" alt=""></div>
<div><i><?= $row->ad->message ?></i></div>
<br>
<div><i>annonce n°: <?= $row->ad->id ?></i></div>

</div></center>
<br />
<br />

    <?php

    }
    ?>

    <br />

<?php
} else {
    echo "Vous n'avez aucune annonce en favoris";
}
?>

<?php
include __DIR__ . '/../../templates/footer.php';
?>