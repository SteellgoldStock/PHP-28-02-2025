<div id="menu">
  <a href="index.php" class=<?php echo !isset($_GET["page"]) ? "active" : "" ?>>Home</a>
  <a href="index.php?page=about" class=<?php echo isset($_GET["page"]) && $_GET["page"] === "about" ? "active" : "" ?>>About</a>
  <a href="index.php?page=contact" class=<?php echo isset($_GET["page"]) && $_GET["page"] === "contact" ? "active" : "" ?>>Contact</a>
  <a href="index.php?page=faq" class=<?php echo isset($_GET["page"]) && $_GET["page"] === "faq" ? "active" : "" ?>>FAQ</a>

  <?php if (isset($_SESSION["username"])): ?>
    <a href="index.php?page=protected" class=<?php echo isset($_GET["page"]) && $_GET["page"] === "protected" ? "active" : "" ?>>Protected</a>
    <a href="./logout.php">Logout</a>
  <?php else: ?>
    <a href="./login.php">Login</a>
  <?php endif; ?>
</div>

<style>
  #menu {
    background-color: #000;
    padding: 20px;

    display: flex;
    justify-content: center;
  }

  #menu a {
    color: #fff;
    text-decoration: none;
    margin: 0 10px;
    font-size: 35px;

    &:hover {
      text-decoration: underline;
    }
  }

  #menu a.active {
    text-decoration: underline;
    color: #ff0;
    background-color: #f00;
  }

  #menu a.logged {
    margin-left: auto;
  }
</style>