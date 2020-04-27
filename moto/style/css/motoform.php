<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
  <div class="form-group">
    <input type="text" name="model" class="form-control" id="exampleFormControlInput1" placeholder="Model" required ="required">
  </div>
  <div class="form-group">
    <input type="text" name="cylindre" class="form-control" id="exampleFormControlInput1" placeholder="Cylindre" required ="required">
  </div>
  <div class="form-group">
    <input type="text" name="serie" class="form-control" id="exampleFormControlInput1" placeholder="serie" required ="required">
  </div>
  <div class="form-group">
    <input type="text" name="prix" class="form-control" id="exampleFormControlInput1" placeholder="prix" required ="required">
  </div>
 
  <div class="sbouton1">
    <input id="sendTuteurs" type="submit" value="Envoyer" name="valider" onclick="versFormApprenant()" class="btn btn-outline-primary sbouton2">
    <button type="button" class="btn btn-outline-primary sbouton2"onclick="versenregistrement()"><a href="../marque/liste">Annuler</a></button>
  </div>
</form>
</body>
</html>