<?php include "inc/header.php";

$json_file = "./article.json";
$json = file_get_contents($json_file);
$links = json_decode($json, TRUE);
?>

<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Liste des musiques</th>
        <td> Prix </td>
        <td> Achat </td>
      </tr>
    </thead>
    <tbody>
      <?php foreach($links['data'] as $key=>$val){ ?>
      <tr>
        <td><?php echo $val['name']; ?></td>
        <td><?php echo $val['price']; ?></td>
        <td><form action="./panier.php" method="post">
               <input class="hidden" type="text" name="id" value="<?php echo $val['id'] ?>">
               <input class="hidden" type="text" name="name" value="<?php echo $val['name'] ?>">
               <input class="hidden" type="text" name="price" value="<?php echo $val['price'] ?>">
              <button type="submit" name="button">achat</button>
        </form></td>
      <?php } ?>
      </tr>
    </tbody>
  </table>
</div>

<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">votre panier</button>
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
     <p></p>
       <?php //echo $_GET['id']; ?>
    </div>
  </div>
</div> -->

<?php include "./inc/footer.php"; ?>
