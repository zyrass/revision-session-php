<?php
session_start();

if (!isset($_POST['pseudo'])) {
  header("Location: index.php");
} else {
  $_SESSION['pseudo'] = $_POST['pseudo'];
}

?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Info User</title>

  <!-- CSS -->
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <header>
    <nav>
      <a href="/">Révision sur les sessions en PHP</a>
    </nav>
  </header>

  <main>
    <h1>
      Bonjour <?php
              if (!isset($_SESSION['pseudo'])) {
                echo '!';
              } else {
                echo $_SESSION['pseudo'];
              }
              ?>
    </h1>
  </main>
</body>

</html>