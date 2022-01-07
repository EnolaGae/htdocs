<html>

<head>
  <h1>Admin tools</h1>
  <title>Admin</title>
</head>
<body>
<?php
$Ftexte = fopen("data/admin.txt","w");
fwrite($Ftexte, "test data");
fclose($Ftexte)
?>
<form>
  <input type="text" name="météo" placeholder="Température" required> <br>
  <input type="text" name="Humidité" placeholder="Humidité" required> <br>
<button>
  Valider
</button>


</body>
</html>
