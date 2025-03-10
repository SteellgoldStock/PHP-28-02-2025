<?php

require_once "./lib/product.php";

class Basket {
  private $products = [];

  public function addProduct(Product $product) {
    $this->products[] = $product;
  }

  public function getProducts() {
    return $this->products;
  }

  public function getTotalPrice() {
    $total = 0;
    foreach ($this->products as $product) {
      $total += $product->getPrice();
    }
    return $total;
  }
}

?>