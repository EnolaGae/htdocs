<html>

<head>
  <h2>Changer la météo</h2>
  <title>Admin</title>
</head>

<body>

  <form method="post">

    <input type="text" name="temperature" placeholder="Température" required> <br>
    <input type="text" name="humidite" placeholder="Humidité" required> <br>
    <input type="submit">
    <button>
      <input type="submit" />
    </button>
  </form>
    <h2>Créer un utilisateur</h2>
    <form>
      <input type="text" name="new_user" placeholder="Nouvel utilisateur" required> <br>
      <input type="text" name="new_password" placeholder="Nouveau mot de passe" required> <br>
    <button>
      Valider
    </button>
<?php

$meteo = ($_GET["temperature"]);
$humidite = ($_GET["humidite"]);
$Ftexte = fopen("data/admin.txt","w");
fwrite($Ftexte, $meteo . "\n");
fwrite($Ftexte, $humidite . "\n");
fclose($Ftexte);
//$_GET("meteo")&&$_GET("humidite");
?>
</body>
</html>
