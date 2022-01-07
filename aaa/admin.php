<html>

<head>
  <h1>Admin tools</h1>
  <title>Admin</title>
</head>

<body>

  <form>

    <input type="text" name="temperature" placeholder="Température" required> <br>
    <input type="text" name="humidite" placeholder="Humidité" required> <br>

    <button>
      Valider
    </button>

<?php

$meteo = ($_GET["temperature"]);
$temperature = ($_GET["temperature"]);
$Ftexte = fopen("data/admin.txt","w");
  fwrite($Ftexte, $meteo, $temperature);
  fclose($Ftexte);
//$_GET("meteo")&&$_GET("humidite");
?>



</body>
</html>
