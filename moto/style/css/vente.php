<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1 id="bienvenu"> Connexion </h1>

<form action="insertion2.php" method="POST">
  <div class="form-group">
    <input type="text" name="nom" class="form-control" id="exampleFormControlInput1" placeholder="Nom" required ="required">
  </div>
  <div class="form-group">
    <input type="text" name="prenom" class="form-control" id="exampleFormControlInput1" placeholder="Prénom" required ="required">
  </div>
  <div class="form-group">
    <input type="number" name="numero" class="form-control" id="exampleFormControlInput1" placeholder="numero" required ="required">
  </div>
  <div class="form-group">
    <input type="text" name="date" class="form-control" id="exampleFormControlInput1" placeholder="date" required ="required">
  </div>
  <div class="form-group">
    <input type="text" name="quantité" class="form-control" id="exampleFormControlInput1" placeholder="Quantité" required ="required">
  </div>
  <div class="form-group">
    <input type="text" name="somme" class="form-control" id="exampleFormControlInput1" placeholder="Somme" required ="required">
  </div>
 
  <div class="sbouton1">
    <input id="sendTuteurs" type="submit" value="Envoyer" name="valider" onclick="versFormApprenant()" class="btn btn-outline-primary sbouton2">
    <button type="button" class="btn btn-outline-primary sbouton2"onclick="versenregistrement()">Annuler</button>
  </div>
</form>
</body>
</html>