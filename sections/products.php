<?php
  // créer plein de produits
  $products = [
    new Product("x64 Banana", 70, "https://www.jaimefruitsetlegumes.ca/wp-content/uploads/2019/08/iStock_000007671231Large-e1565725651658.jpg"),
    new Product("x32 Apple", 45.5, "https://www.bonparfumeur.com/cdn/shop/files/Pomme_535x.png?v=1688983786"),
    new Product("x16 Orange", 30, "https://terrabacchus.fr/wp-content/uploads/sites/25/2017/01/Orange-a-manger.png"),
    new Product("x8 Pineapple", 15, "https://thefruitandvegman.com/cdn/shop/products/Pineapple_7248e4f5-8b22-4001-b2c5-f09170a1babb.jpg?v=1679519801")
  ];

  $basket = $_SESSION["basket"];
  if (!$basket) {
    $basket = new Basket();
    $_SESSION["basket"] = $basket;
  }

  if (isset($_POST["add"])) {
    $product = $products[$_POST["add"]];
    $basket->addProduct($product);
  }
?>

<div class="products">
  <h1>Products (Total: <?php echo $basket->getTotalPrice(); ?>)</h1>

  <?php foreach ($products as $index => $product): ?>
    <div>
      <div class="product">
        <div>
          <img src=<?php echo $product->getImage(); ?> alt=<?php echo $product->getName(); ?>>
          <div>
            <span><?php echo $product->getName(); ?></span>
            <span><?php echo $product->getPrice(); ?>€</span>
          </div>
        </div>

        <form method="post">
          <input type="hidden" name="add" value=<?php echo $index; ?>>
          <button type="submit">Add to basket</button>
        </form>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<style>
  .products {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .products h1 {
    margin-bottom: 20px;
  }

  .product {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    padding: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .product img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    margin-right: 10px;
  }

  .product div {
    display: flex;
    flex-direction: column;
  }

  .product span {
    font-size: 20px;
  }

  .product span:first-child {
    font-weight: bold;
  }

  .product button {
    padding: 10px;
    font-size: 16px;
    background-color: #000;
    color: #fff;
    border: none;
  }
</style>