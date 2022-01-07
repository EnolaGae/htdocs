<!DOCTYPE html>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">

<html>
      <header>
        <link href='https://fonts.googleapis.com/css?family=Chivo' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Armata' rel='stylesheet'>
      </header>

      <title>ProMétéo&#174;</title>

      <body>
        <style>
body {
    font-family: 'Armata';font-size: 22px;
}
        </style>


        <div class="topnav">
          <a class="active" href="#home">Accueil</a>
          <a href="#news">News</a>
          <a href="#contact">Contact</a>
        </div>

        <div class="main">

          <div class="hellotext" onload=display_ct();>
            <h1>Bienvenue sur ProMétéo&#174;</h1>
            <p>Nous sommes le <span id='ct' ></span> et il est actuellement <span id='cd' ></span></p>
            <p>La température extérieure est de 6°C, et il fait nuageux.</p>
          </div>


        <script type="text/javascript">
        function display_c(){
        var refresh=1000; // Refresh rate in milli seconds
        mytime=setTimeout('display_ct()',refresh)
        }

        function display_ct() {
          var x = new Date()
          var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear();
          var x2=x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds();
          document.getElementById('ct').innerHTML = x1;
          document.getElementById('cd').innerHTML = x2;
        display_c();
         }
        </script>


          <body onload=display_ct();>
          <span id='ct'></span>


<!--    Ici, on a le formulaire dans lequel l'utilisateur va entrer son nom d'utilisateur et son mot de passe    -->
  <div class="container-login100">
    <div class="wrap-login100">

      <form class="login100-form validate-form" action="acces.php" method="POST">
        <span class="login100-form-title">
          Connexion
        </span>

        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <input class="input100" type="text" name="login" placeholder="Nom d'utilisateur" required>
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Password is required">
          <input class="input100" type="password" name="motpasse" placeholder="Mot de passe" required>
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-lock" aria-hidden="true"></i>
          </span>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Connexion
          </button>
        </div>

        <div class="text-center p-t-12">
          <a class="txt2" href="#">
            Nom d'utilisateur / Mot de passe oublié
          </a>
        </div>

        <div class="text-center p-t-136">
          <a class="txt2" href="#">
            Créer un compte
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
          </a>
        </div>
      </form>
    </div>
  </div>

        </div>

      <footer id="footer">

          <h2> Retrouvez nous sur les réseaux sociaux !</h2>


          <a href="http://www.twitter.com" target="blank">
            <img class="logo" src="./icones/twitter.svg" hspace=25 height=50px/></a>

          <a href="http://www.youtube.com" target="blank">
            <img class="logo" src="./icones/youtube.svg" hspace=25 height=50px/></a>

          <a href="http://www.discord.com" target="blank">
            <img class="logo" src="./icones/discord.svg" hspace=25 height=50px/></a>

          <a href="http://www.github.com" target="blank">
            <img class="logo" src="./icones/github.svg" hspace=25 height=50px/></a>

          <a href="http://www.instagram.com" target="blank">
            <img class="logo" src="./icones/instagram.svg" hspace=25 height=50px/></a>

          <a href="http://www.reddit.com" target="blank">
            <img class="logo" src="./icones/reddit.svg" hspace=25 height=50px/></a>

          <a href="http://www.twitch.tv" target="blank">
            <img class="logo" src="./icones/twitch.svg" hspace=25 height=50px/></a>

          <p>© 2021 Aurélien VEILLET - Tous droits réservés.</p>

      </footer>
