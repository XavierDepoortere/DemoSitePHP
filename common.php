<?php
$data = file_get_contents('./products.json');
$products = json_decode($data);
  
function findById($id) {
  global $products;
  $result = null;
  foreach ($products as $product) {
    if ($product->id == $id) {
      $result = $product;
      break;
    }
  }
  return $result;
}
?>
