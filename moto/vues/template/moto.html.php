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
      <li class="nav-item ">
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


<div id="banniere">
<h3>Les motos <?= $pageTitle ?></h3>

     <?php if (count($motos)==0 ): ?>

<h3>Il n'existe pas encore de moto <?= $pageTitle ?> </h3>
<div>
<button type="button" class="btn btn-outline-primary sbouton2"><a href="../formulaire/formMoto?id=<?= $id_marque?>">Nouvelle moto</a></button>

</div>

<?php else : ?>
<?php $i=1; ?>
<?php if (count($motos)==1 ): ?>
<h3><?= count($motos) ?> seul Model de Moto <?= $pageTitle ?> est nregistrée </h3>

<?php else : ?>

  <h3><?= count($motos) ?> Models de <?= $pageTitle ?> enregistrées</h3>
<?php endif ?> 
<hr>
<div class="sbouton1">
<button type="button" class="btn btn-outline-primary sbouton2"><a href="../formulaire/formMoto?id=<?= $id_marque?>">Nouvelle moto</a></button>
<button type="button" class="btn btn-outline-primary sbouton2"onclick="versenregistrement()"><a href="../marque/liste">Retour</a></button>
  </div>
  <hr>
<br>
<br>
<div class="sect-niv nivi">

<?php foreach ($motos as $moto) : ?>
    
            <div class="card" style="width: 18rem;">
  <img src="<?= $moto['logo'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title"><?= $moto['model'] ?></h3>
    
  </div>
   <div class="card-body">
    <h5 class="card-title"><?= $moto['prix'] ?> FCFA</h5>
    
  </div>

   <div class="card-body clicable">
    
<a href="../moto/detail?id=<?= $moto['id_moto'] ?>">DETAILS</a>
  </div>
  <div class="card-body clicable">
    <a  href="../moto/vendre?id=<?= $moto['id_moto'] ?>">Vendre</a>
  </div>
  <div class="card-body clicable">
    
    <a  href="../moto/delete?id=<?=$moto['id_moto'] ?>" onclick="return window.confirm(`Êtes vous sur de vouloir supprimer cette moto ?!`)">Supprimer</a>
  </div>
</div>
<br>
<br>
<?php endforeach ?>
<br>
<br>

<br>
<br>
</div>
<br>

</div>


<hr>
<div class="sbouton1">
<button type="button" class="btn btn-outline-primary sbouton2"><a href="../formulaire/formMoto?id=<?= $id_marque?>">Nouvelle moto</a></button>
<button type="button" class="btn btn-outline-primary sbouton2"onclick="versenregistrement()"><a href="../marque/liste">Retour</a></button>
  </div>
  <hr>
<br>
<br>

</div>




<?php endif ?>
