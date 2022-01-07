<?php

       if (($_GET["login"] == "utilisateur") && ($_GET["motpasse"] == "1234"))

               {

                       header('Location: dataMeteo.php');

               }

       else

                       echo "Acces refusé";

        if (($_GET["login"] == "admin") && ($_GET["motpasse"] == "4321"))

              {
                        header('Location: admin.php');

              }

        else

                       echo "Acces refusé";

?>
