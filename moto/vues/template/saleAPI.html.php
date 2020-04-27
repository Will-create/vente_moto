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

 <br>
 
 
 
 <br>
  <hr >

  <h3 style="color:red; text-align: center;">Vendre la <?=$nom_marque?> <?= $moto['model']?></h3>
  <hr>

<form action="../vente/form?id=<?=$moto['id_moto']?>" method="POST">
  <div class="form-group">
    <input type="hidden" name="id_moto" value="<?=$moto['id_moto']?>"  class="form-control" id="exampleFormControlInput1" placeholder="Nom" required ="required">
  </div>
  <div class="form-group">
    <input type="hidden"s name="marque_moto" value="<?=$nom_marque?>"  class="form-control" id="exampleFormControlInput1" placeholder="Nom" required ="required">
  </div>
  <div class="form-group">
    <input type="hidden" name="model_moto" value="<?=$moto['model']?>"  class="form-control" id="exampleFormControlInput1" placeholder="Nom" required ="required">
  </div>
  <div class="form-group">
    <input type="date" name="date_vente" class="form-control" id="exampleFormControlInput1" placeholder="Date" required ="required">
  </div>
  <div class="form-group">
    <input type="text" name="nom_client" class="form-control" id="exampleFormControlInput1" placeholder="Nom du Client" required ="required">
  </div>
  <div class="form-group">
    <input type="text" name="prenom_client" class="form-control" id="exampleFormControlInput1" placeholder="Prenom du client" required ="required">
  </div>
  <div class="form-group">
    <input type="text" name="cnib_client" class="form-control" id="exampleFormControlInput1" placeholder="CNIB client" required ="required">
  </div>
  <div class="form-group">
    <input type="text" name="numero_client" class="form-control" id="exampleFormControlInput1" placeholder="Contact du client" required ="required">
  </div>

  <div class="form-group">
    <input type="text" name="serie" class="form-control" id="exampleFormControlInput1" placeholder="Numero de Serie de la moto" required ="required">
  </div>
  <div class="form-group">
    <input type="text" name="somme" class="form-control" id="exampleFormControlInput1" placeholder="Somme de la vente" required ="required">
  </div>
 
  <div class="sbouton1">
    <input id="sendTuteurs" type="submit" value="Envoyer" name="valider" onclick="versFormApprenant()" class="btn btn-outline-primary sbouton2">
    <button type="button" class="btn btn-outline-primary sbouton2"onclick="versenregistrement()">Annuler</button>
  </div>
</form>
</body>
</html>