<?php
require_once('./header.php');
require_once('./common.php');
?>
<main class="home flex wrap inset">

<?php  
  foreach ($products as $product) {
?>
  <article class="mosaic inset">
    <img src="images/<?= $product->image ?>" alt="">
    <div class="flex space-between inset">
      <div><?= $product->name ?></div>
      <div><?= $product->price ?> €</div>
    </div>
    <a href="product.php?id=<?= $product->id ?>" class="button full">Voir</a>
  </article>
<?php
  }
?>


</main>
<?php
require_once('./footer.php');
?>
