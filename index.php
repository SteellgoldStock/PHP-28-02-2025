<?php
  require_once "./lib/product.php";
  require_once "./lib/basket.php";
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yop</title>
</head>
<body>
  <?php include 'lib/header.php'; ?>  

  <?php

    $PAGES = [
      "about" => "sections/about.php",
      "contact" => "sections/contact.php",
      "faq" => "sections/faq.php",
      "protected" => "sections/protected.php",
      "products" => "sections/products.php"
    ];

    if (isset($_GET["page"]) && array_key_exists($_GET["page"], $PAGES)) {
      include $PAGES[$_GET["page"]];
    } else {
      include 'sections/home.php';
    }
  ?>
</body>

<style>
  body {
    padding: 0;
    margin: 0;

    font-family: Arial, sans-serif;
  }
</style>

</html>