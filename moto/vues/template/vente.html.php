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
      <li class="nav-item ">
        <a class="nav-link navcol" href="../marque/liste">Gestion de Motos</a>
      </li>
      <li class="nav-item active">
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
<h1>Liste des Ventes</h1>

     
<?php $i=1; ?>

     <?php if (count($ventes)==0 ): ?>

<h3>Il n'existe pas encore de ventes dans votre systeme </h3>
<div>
<button type="button" class="btn btn-outline-primary sbouton2"><a href="../marque/liste">Nouvelle vente</a></button>

</div>

<?php else : ?>
<?php $i=1; ?>
<?php if (count($ventes)==1 ): ?>
<h3><?= count($ventes) ?> seule vente enregistrée </h3>

<?php else : ?>



<h1><?= count($ventes) ?> Ventes sont enregistrées dans votre systeme</h1>
<br>
<br>
<br>
<?php endif ?>


<div class="sect-niv nivi">
<table class="table table-bordered" >
      <thead>
      
            <th scope="col" class="vert">Numero </th>
            

            <th scope="col" class="vert">Photo</th>
              
            
            
            <th scope="col" class="vert">Date</th>

            <th scope="col" class="vert">Somme</th></th>
      

            <th scope="col" class="vert">Client</th>
      
            <th scope="col" class="vert">Numero de Serie</th>
 


            <th scope="col" class="vert">Detail</th>
            <th scope="col" class="vert">Supprimer</th>
      
      
      
      
      
      
      
      
      
      </thead>
      <tbody>
<?php foreach ($ventes as $vente) : ?>
    <tr>
            <td> <?php echo ' [   '. $i++.'    ]'; ?></td>
            <td> <?= $vente['date_vente'] ?></td>
            
             <td><img src="<?= $vente['photo_moto']?>" alt="Photo de la moto" width="25" height="25"></td>
            
           
            
            <td><?=  $vente['somme']   ?></td>
            <td> <?= $vente['nom_client'].'     '.$vente['prenom_client'] ?></td>
            <td> <?= $vente['serie'] ?></td>
            

            
            
            
            
            
            
            <td><a href="./detail?id=<?= $vente['id_vente'] ?>">DETAILS</a></td>
            <td><a href="./delete?id=<?=$vente['id_vente'] ?>" onclick="return window.confirm(`Êtes vous sur de vouloir supprimer cette consultaion ?!`)">Supprimer</a></td>
            
    </tr>
    </tr>
   
    



      

<?php endforeach ?>
</tbody>
</table>
<br>
<br>





<div>
<button type="button" class="btn btn-outline-primary sbouton2"><a href="../marque/liste">Nouvelle Vente</a></button>

</div>
<br>
<br>
</div>
</div>
<?php endif ?>












