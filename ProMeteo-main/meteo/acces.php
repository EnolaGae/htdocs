<?php

       if (($_GET["login"] == "utilisateur") && ($_GET["motpasse"] == "1234"))

               {

                       header('Location: dataMeteo.php');

               }

       else

                       echo "Acces refusé";

?>
