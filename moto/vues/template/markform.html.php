<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenu dans gestion moto</title>
    <link rel="stylesheet" type="text/css"  href="../style/css/bootstrap.min.css">
    <script type="text/javascript" src="../style/js/jquery/jquery.js"></script>
    <link rel="stylesheet" type="text/css"  href="../style/css/bootstrap-theme.min">
    <link rel="stylesheet" type="text/css"  href="../style/css/style.css">
</head>
<body>
  
<div class="container cont">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="image">
    <img src="../style/img/logo.jpeg">
</div>
  <button class="navbar-toggler  whit" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item  ">
        <a class="nav-link navcol" href="../home/index">Accueil </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link navcol" href="../marque/liste">Gestion de Motos</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link navcol" href="../vente/liste"> Gestion de vente</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link navcol" href="../connexion/logout">Deconnexion</a>
      </li>
      
    </ul>
    <!-- <div class="titre1" >
    <h6> Gestion et vente de motos originaux <h6>
</div> -->

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



<hr >

  <h3 style="color:red; text-align: center;">AJOUTER UNE Marque</h3>
  <hr>

<form action="../marque/form" method="POST">
  <div class="form-group">
  
   <input type="text" onblur="var valeur=this.value; valeur.toUpperCase();" required name="Nom_de_la_marque_" placeholder="Nome de la marque"> <br>  <br>  <br>
   


  <label for="logo">Logo de la marque</label>
   


<div class="form-group row-md-6">
      <div id="photo"><img id="profil" class="iconapp" src="../style/img/4.jpg"></div>
    </div> 
  </div>
  <input type="file" required name="logo" class="form-controlb" id="inputPassword4" oninput="afficherPhoto(this,'profil')">
  </div>   



  <div class="sbouton1">
    <input id="sendTuteurs" type="submit" value="Envoyer" name="valider" onclick="versFormApprenant()" class="btn btn-outline-primary sbouton2">
    <button type="button" class="btn btn-outline-primary sbouton2"onclick="versenregistrement()"><a href="../marque/liste">Annuler</a></button>
  </div>
</form>