
<?php require "controladores/controladorUsuario.php";?>
<?php //require "controladores/controladorActividad.php";?>
<!-- -----------------------------------------SESSION--------------------------------------------------------------------------------------- -->
<?php 
  session_start();//Inicializar la session siempre.
  comprobarLogin();
?>
<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->






<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="./estilos/estilos.css" />
  <script src="./scripts/script.js"></script>
  <title>Home</title>
</head>

<body id="home">
  <!-- -------------------------------------------NAVBAR--------------------------------- -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="./media/Logo.png" class="logo-brand" alt="logo" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#" id="home">Inicio </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./php/calendario.html" id="Calendario">Calendario</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="./php/fichaje.html" id="Fichaje">Fichaje</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="logout.php" id="Salir">Salir</a>
          </li>
          <ul class="nav">
          
            <img class="imgNavbar" src="https://graph.facebook.com/66200111/picture?width=64&height=64" />
            <h4 class="pl-3 pt-2"> <?php echo  $_SESSION["usuario"]["nombre"] ?></h4>
            </a>
            </li>
          </ul>
        </ul>
      </div>
    </div>
  </nav>
  <!-- ------------------------------------------FINAL-NAVBAR--------------------------------- -->

  <!-- -------------------------------------------HEADER--------------------------------- -->
  <div id="header">
  </div>
  <div class="titleHeader">
    <h1 class="display-4 ">
      Con Journ Work el control <br>
      horario es mucho más fácil
    </h1>
    <!-- <img class="btnFichaje" src="./media/enter1.jpg" alt="boton fichaje"> -->
  </div>
  </div>
  <!-- --------------------------------------BOTON------------------------------------------------------ -->
  <div class="row justify-content-center">
    <button  type="button" class="btn btn-outline-dark col-1 "><h3>Fichar</h3></button>
    
  </div>

  <!-- ------------------------------------FIN--BOTON------------------------------------------------------ -->
  



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script>
    setInterval(heroSlideShow, 3000);
  </script>
</body>

</html>

<!-- Codigo ------------------------------------------------------------------------------------------------------------------------------->