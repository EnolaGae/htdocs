<?php
       if (($_POST["login"] == "utilisateur") && ($_POST["motpasse"] == "1234"))

               {

                       header('Location: dataMeteo.php');

               }

       else

                       echo "Acces refusé";
                       echo $login;
?>
