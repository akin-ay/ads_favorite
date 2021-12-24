<?php
include __DIR__ . '/../../templates/header.php';
?>

<h1>Accueil</h1>
<br>
<br>
<h3>Liste des articles</h3>
<?php
foreach ($ads as $ad) { ?>
    <center>
        <div style="width: 800px;background-color: #FEF6D2; border-radius: 30px;border: solid #FBE894 10px;">
            <div><h3><?= $ad->title ?></h3></div><br>
            <div><img style="width:500px" src="<?= $ad->img ?>" /></div><br>
            <div><i><?= $ad->message ?></i></div>
            <form action="/favorite/add" method="POST">
                <input type="hidden" name="id" value="<?= $ad->id ?>">
                <button style="background-color: yellow;" type="submite"><i class="far fa-star"></i></button>
            </form>
            <div><b>annonce n° : <?= $ad->id ?></b></div>
            </div>
    </center>
    <br /><br />
    <hr>

<?php
}
include __DIR__ . '/../../templates/footer.php';
?>

