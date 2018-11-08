<?php include "./inc/header.php" ?>

<!-- Formulaire pour créer un nouveau fichier dans "inc". -->


<div>
  <label> Ajouter une musique</label>
  <form class="create" action="./ajout.php" method="post">
    <input type="text" name="id" value="">
    <input type="text" name="name" value="">
    <input type="text" name="price" value="">
    <input type="submit"  value="Add">
  </form>
</div>



<?php include "./inc/footer.php" ?>
