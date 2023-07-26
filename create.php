<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
  <header class="flex space-between boldff">
    <div>LA BOUTIQUE</div>
    <i class="fa-solid fa-cart-shopping"></i>
  </header>

  <main class="inset fullsize column">

    <h1>Nouveau produit</h1>
    <form action="" method="post">

      <div class="form-group"><label for="name">Nom</label><input type="text" id="name" name=""></div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" name="description"></textarea>
      </div>
      <div class="form-group"><label for="price">Prix</label><input type="number" id="price" name="price"></div>
      <div class="form-group">
        <label for="vat">TVA</label>
        <select type="text" id="vat" name="vat">
          <option value="2.1">2.1%</option>
          <option value="5.5">5.5%</option>
          <option value="10">10%</option>
          <option value="20" selected>20%</option>
        </select>
      </div>
      <div class="form-group">
        <label for="image">Image</label>
        <input type="file" id="image" name="image">
      </div>
      <div class="inset">
        <button type="submit" class="button">Ajouter</button>
      </div>

    </form>

  </main>

</body>

</html>
