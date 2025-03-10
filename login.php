<?php

require_once "./lib/basket.php";

session_start();

if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  if ($username === "Gaetan" && $password === "gaetan") {
    $_SESSION["username"] = $username;
    $_SESSION["basket"] = new Basket();
    header("Location: index.php");
  } else {
    $error = true;
  }
}

?>

<div class="login">
  <h1>Login</h1>

  <form method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit" name="login">Login</button>
  </form>

  <?php if (isset($error)): ?>
    <p style="color: red;">Invalid credentials</p>
  <?php endif; ?>
</div>

<style>
  .login {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }

  .login h1 {
    margin-bottom: 20px;
  }

  .login input {
    margin-bottom: 10px;
    padding: 10px;
    font-size: 16px;
  }

  .login button {
    padding: 10px;
    font-size: 16px;
    background-color: #000;
    color: #fff;
    border: none;
    cursor: pointer;
  }
</style>