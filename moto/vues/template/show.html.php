
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index.php"><img class="logo" src="images/logo.jpg"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="menu-nav">
      <li ><a href="accueil.php">ACCUEIL</a></li>
      <li id="actif" ><a href="liste.php">Liste des patients</a></li>
      <li><a href="enregistrement.php">Enregistrer un patient</a></li>
      <li><a href="index.php">Déconnexion</a></li>
    </ul>
  </div>
</nav>
<div id="banniere">
<h1 id="bienvenu">Détails d'un patient</h1>
<div class="global-content">
        <aside class="sidebare">
            <h3 class="menu-vertic" onclick="afficher(1);"> <a>Profil</a></h3>
            <h3 class="menu-vertic" onclick="afficher(2);"> <a> Infos Patients</a></h3>
            <h3 class="menu-vertic" onclick="afficher(3);"> <a>Consultation </a></h3>
        </aside>
        <div class="content-page">

             <section class="body-niveau1">
                <div class="sect-niv">
                <div class="content-menu" >
        <label class="detail-text">Nom</label> <span id="nom"> : <?= $patient['nom'] ?></span> <br>
        <label class="detail-text">Prenom </label><span id="prenom">: <?= $patient['prenom'] ?></span> <br>
        <label class="detail-text">Genre </label><span id="genre"> : <?= $patient['genre'] ?></span> <br>
        <label class="detail-text">Profession </label><span id="profession">: <?= $patient['profession'] ?></span> <br>
        <label class="detail-text">Contact</label><span id="contact">: <?= $patient['telephone'] ?></span> <br>
                   
                 </div> 
                </div>
             </section>
             <section class="body-niveau1">
                <div class="sect-niv">
                <div class="content-menu" >
         <?php if (count($infos) === 0) : ?>
                  Il n'y a pas encore d'informations  pour <?= $patient['nom'] ?>  <?= $patient['prenom'] ?>
                  
                  <hr>
                  
                   <br><br>
                  <div class="sbouton1">
 <button  type="button" class="btn btn-outline-primary sbouton2" onclick="afficher(5)">Nouveau</button>
</div>
                   <br><br>


                   <?php else: ?>
                   <?php $x=1; ?>
             <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col" class="vert">N°</th>
                      <th scope="col" class="vert">Poids</th>
                      <th scope="col" class="vert">Groupe Sanguuin</th>
                      <th scope="col" class="vert">Electro-phorèse</th>
                      <th scope="col" class="vert">Vaccins</th>
                      <th scope="col" class="vert">Examens Médicaux</th>
                      <th scope="col" class="vert">Autres<th>
                    </tr>
                  </thead>
                  <tbody>
                   

                  
                   <?php foreach ($infos as $info) : ?>
                    <tr>
                            <td> <?php echo ' '. $x++.''; ?></td>
                            <td> <?= $info['poids'] ?></td>
                            <td> <?= $info['group_sang'] ?></td>
                            <td> <?= $info['electro'] ?></td>
                            <td> <?= $info['vaccin'] ?></td>
                            <td> <?= $info['examen'] ?></td>
                            <td> <?= $info['autres'] ?></td>
                    </tr>
                     <?php endforeach ?>
                  </tbody>
                </table>
            
             <?php endif ?>
                 </div> 
                </div>
             </section>
             
             <section class="body-niveau1">
                <div class="sect-niv">
                <div class="content-menu" >
                  <span id="urolo"><h4>Consultation</h4></span> 
                  
                  
                   <br><hr>

                  <?php if (count($consultations) === 0) : ?>
                  Il n'y a pas encore de consultations pour <?= $patient['nom'] ?>  <?= $patient['prenom'] ?>

                   <?php else: ?>

                    <?php $i=1; ?>
                <div class="table-responsive">
                  <table class="table table-bordered">
                  <thead>
                    <tr class="vert">
                      <th scope="col">N°</th>
                      <th scope="col">Date</th>
                      <th scope="col">Poids</th>
                      <th scope="col">Tension</th>
                      <th scope="col">Temperature</th>
                      <th scope="col">Debut</th>
                      <th scope="col">Symptomes</th>
                      <th scope="col">T en cours</th>
                      <th scope="col">Precription</th>
                      <th scope="col">Commentaire</th>
                      <th scope="col"><h4>Supprimer</h4></th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <?php foreach ($consultations as $consultation) : ?>
                    <tr>
                            <td> <?php echo ''. $i++.''; ?></td>
                            <td> <?= $consultation['cree_le'] ?></td>
                            <td> <?= $consultation['poids'] ?></td>
                            <td> <?= $consultation['tension'] ?></td>
                            <td> <?= $consultation['temp'] ?></td>
                            <td> <?= $consultation['debut'] ?></td>
                            <td> <?= $consultation['symptomes'] ?></td>
                            <td> <?= $consultation['trait_cours'] ?></td>
                            <td> <?= $consultation['prescri'] ?></td>
                            <td> <?= $consultation['comment'] ?></td>
                            <td><a href="delete-consultation.php?id=<?=$consultation['id'] ?>" onclick="return window.confirm(`Êtes vous sur de vouloir supprimer cette consultaion ?!`)">Supprimer</a></td>
                    </tr>
                    <?php endforeach ?>
                    <?php endif ?>
                  </tbody>
                </table>
                <br>
                <br>
                <br>
                <br>
                <br>
                
                <hr>
            </div>
            <div class="sbouton1">
                <button  type="button" class="btn btn-outline-primary sbouton2" onclick="afficher(4)">Nouveau</button>
                   
                   </div>
                   <br><br>
                   <br>
                   <br><br>
                   
                   
                   
                   
                 </div> 
                </div>
             </section>
              <section class="body-niveau1 exception">
                <div class="sect-niv">
                <div class="content-menu" >

        <h1 id="bienvenu"> Formulaire Nouvelle Consultation </h1>

<form action="save-consultation.php" method="POST">
    <div class="form-group">
    <input type="hidden" name="id_patient" value="<?= $patient['id'] ?>" class="form-control" id="exampleFormControlInput1" placeholder="Poids" required ="required">
  </div>
  <div class="form-group">
    <input type="text" name="poids" class="form-control" id="exampleFormControlInput1" placeholder="Poids" required ="required">
  </div>
  
  <div class="form-group">
    <input type="text" name="tension" class="form-control" id="exampleFormControlInput1" placeholder="Tension" required ="required">
  </div>
  
  <div class="form-group">
    <input type="text" name="temp" class="form-control" id="exampleFormControlInput1" placeholder="Temperature" required ="required">
  </div>
   
  <div class="form-group">
    <input type="date" name="debut" class="form-control" id="exampleFormControlInput1" placeholder="Date de début" required ="required">
  </div>
   <div class="form-group">
    <textarea name="symptomes" class="form-control" id="exampleFormControlInput1" onfocus="this.value=''" onblur="if(this.value==''){this.value='Symptomes'}" required ="required"> Symptomes</textarea>
  </div>
 
    <div class="form-group">
       <textarea name="trait_cours" onfocus="this.value=''" onblur="if(this.value==''){this.value='Traitements en cours'}" class="form-control" id="exampleFormControlInput1" required ="required"> Traitements en cours </textarea>
  </div>

     <div class="form-group">
      <textarea name="prescri" onfocus="this.value=''" onblur="if(this.value==''){this.value='Préscriptions'}" class="form-control" id="exampleFormControlInput1" required ="required"> Préscriptions</textarea>
  </div>

     <div class="form-group">
      <textarea name="comment" onfocus="this.value=''" onblur="if(this.value==''){this.value='Commentaire'}" class="form-control" id="exampleFormControlInput1" required ="required"> commentaire </textarea>
  </div>
  <div class="sbouton1">
    <input id="sendTuteurs" type="submit" value="Envoyer" name="valider" onclick="versFormApprenant()" class="btn btn-outline-primary sbouton2">
    <button type="button" class="btn btn-outline-primary sbouton2"onclick="afficher(3)">Annuler</button>
  </div>
</form>


                   
                 </div> 
                </div>
                </section>
                
                
                
                <section class="body-niveau1 exception">
                <div class="sect-niv">
                <div class="content-menu" >

                    <form action="save-info.php" method="POST">
  <div class="form-group">
    <input type="number" name="poids" class="form-control" id="exampleFormControlInput1" placeholder="poids" required ="required">
  </div>
  <div class="form-group">
    <input type="text" name="group_sang" class="form-control" id="exampleFormControlInput1" placeholder="groupe_sang" required ="required">
  </div>
  <div class="form-group">
    <input type="text" name="electro" class="form-control" id="exampleFormControlInput1" placeholder="électrophorese" required ="required">
  </div>
  <div class="form-group">
    <input type="text" name="vaccin" class="form-control" id="exampleFormControlInput1" placeholder="vaccins" required ="required">
  </div>
   <div class="form-group">
    <input type="text" name="examen" class="form-control" id="exampleFormControlInput1" placeholder="examens médicaux" required ="required">
  </div>
   <div class="form-group">
    <input type="text" name="autres" class="form-control" id="exampleFormControlInput1" placeholder="autres" required ="required">
  </div>
  <div class="form-group">
    <input type="hidden" name="id_patient" value="<?= $patient['id'] ?>" class="form-control" id="exampleFormControlInput1" placeholder="examens médicaux" required ="required">
  </div>
 
  <div class="sbouton1">
    <input id="sendTuteurs" type="submit" value="Envoyer" class="btn btn-outline-primary sbouton2">
    <button type="button" class="btn btn-outline-primary sbouton2"onclick="afficher(2)">Annuler</button>
  </div>
</form>
          
                 </div> 
                </div>
             </section>
             
             
             
             
             
        </div>
        
        </div> 
</div>













































