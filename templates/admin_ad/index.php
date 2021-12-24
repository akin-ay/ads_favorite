<?php
include __DIR__ . '/../../templates/header.php';
?>


<h1>Ajouter une annonce</h1>

<form action="/admin/ad/add" method="POST">
    <center><div style="width: 500px; background-color:burlywood;">
  <div class="form-group">
    <label for="title">Titre</label>
    <input name="title" type="text" placeholder="Titre">
  </div>
  <div>
    <label for="img">lien image</label>
    <input name="img" type="text" placeholder="Lien image : http://...">
  </div>
  <div>
  <label for="message">Message</label>
  <textarea name="message" rows="5" cols="33"></textarea>
</div>
<button type="submit" class="btn btn-success">Submit</button>
</div></center>
</form>
<br>

<?php
include __DIR__ . '/../../templates/footer.php';
?>
