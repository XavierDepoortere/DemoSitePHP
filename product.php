<?php
require_once('./header.php');
require_once('./common.php');
$id = $_GET['id'];
$product = findById($id);
if ($product == null) {
  header('Location: 404.php');
  die();
}
?>
<main class="inset fullsize">

  <article class="flex">
    <img src="images/<?= $product->image ?>" alt="" class="half-witdh">
    <div class="inset flex column center">
      <div class="flex space-between">
        <div>
          <?= $product->name ?>
        </div>
        <div>
          <?= $product->price ?> €
        </div>
      </div>
      <p>
        <?= $product->description ?>
      </p>
      <a href="" class="button full">Ajouter au panier</a>
    </div>
  </article>

</main>

<?php
require_once('./footer.php');
?>
