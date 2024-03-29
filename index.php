<?php session_start(); ?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Les sessions</title>

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

    <?php if (!isset($_SESSION['pseudo'])) { ?>
      <fieldset>
        <legend>Formulaire de connexion</legend>

        <form method="post" action="user.php">
          <div>
            <input type="text" placeholder="Pseudo ici" name="pseudo">
          </div>
          <button type="submit">Soumettre</button>
        </form>
      </fieldset>
    <?php } else { ?>
      <fieldset>
        <legend>Formulaire de DECONNEXION</legend>

        <form method="post" action="traitement.php">
          <button type="submit">Se déconnecter</button>
        </form>
      </fieldset>
    <?php } ?>

  </main>
</body>

</html>