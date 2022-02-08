<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Formulaire d'envoi d'email</title>

</head>
<body>
  <h1>Mon formulaire</h1>
  <form action="traitement_form.php" method="POST">
    <label>Email</label>
    <input type="email" name="email" id="myinput" required>
    <input type="submit" value="Envoyer" id="mybutton">

    <?php
    if (isset($_GET["message"]) && !empty($_GET["message"])){
      $message = $_GET["message"];
      ?>
        <p class="text"><?php echo $message; ?></p>
      <?php
    }

     ?>

  </form>
</body>
</html>
