<?php include "inc/header.php";

//$names = $_GET['name'];
$ids = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];
//$prix = $_GET["price"];
?>

<div class="container">
  <table class="table">
  <thead>
    <tr>
      <td>Numéro de l'article</td>
      <td>Nom de l'article</td>
      <td>prix de l'article</td>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td> <?php echo $ids; ?></td>
        <td> <?php echo $name; ?></td>
        <td> <?php echo $price; ?></td>
    </tr>
  </tbody>
</table>
</div>
<?php include "inc/footer.php" ?>
