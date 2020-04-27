<?php



require_once('models/Model.php');
class Vente extends Model{
      
      protected $table="vente";
      
      
  


 
 
 public function insertVente(){
      
      




$id_moto = null;
if (!empty($_POST['id_moto'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $id_moto = htmlspecialchars($_POST['id_moto']);
}

$marque_moto= null;
if (!empty($_POST['marque_moto'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $marque_moto= htmlspecialchars($_POST['marque_moto']);
}

$model_moto= null;
if (!empty($_POST['model_moto'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $model_moto= htmlspecialchars($_POST['model_moto']);
}


$date_vente= null;
if (!empty($_POST['date_vente'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $date_vente= htmlspecialchars($_POST['date_vente']);
}

$nom_client= null;
if (!empty($_POST['nom_client'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $nom_client= htmlspecialchars($_POST['nom_client']);
}
$prenom_client= null;
if (!empty($_POST['prenom_client'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
     $prenom_client= htmlspecialchars($_POST['prenom_client']);    
         
}
$cnib_client= null;
if (!empty($_POST['cnib_client'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $cnib_client= htmlspecialchars($_POST['cnib_client']);
}
$numero_client= null;
if (!empty($_POST['numero_client'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
     $numero_client=htmlspecialchars( $_POST['numero_client']);    
         
}
$serie= null;
if (!empty($_POST['serie'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
     $serie=htmlspecialchars( $_POST['serie']);    
         
}
$somme= null;
if (!empty($_POST['somme'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
     $somme= htmlspecialchars($_POST['somme']);    
         
}




  $pdo=getpdo();
$requette=$pdo->prepare('INSERT INTO vente(id_moto,marque_moto, model_moto, date_vente, nom_client,prenom_client, cnib_client,numero_client,serie,somme) value(?,?,?,?,?,?,?,?,?,?)');
$requette->execute (array($id_moto,$marque_moto,$model_moto,$date_vente,$nom_client,$prenom_client,$cnib_client,$numero_client,$serie,$somme)); 






}
  
 
 
   

   
}