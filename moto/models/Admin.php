<?php



require_once('models/Model.php');
class Admin extends Model{
      
      protected $table="admin";
      
      
  public function insertAdmin(){
      
      




$nom = null;
if (!empty($_POST['nom'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $nom = htmlspecialchars($_POST['nom']);
}

$prenom= null;
if (!empty($_POST['prenom'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $prenom= htmlspecialchars($_POST['prenom']);
}

$email= null;
if (!empty($_POST['email'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $email= htmlspecialchars($_POST['email']);
}


$password= null;
if (!empty($_POST['password'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $password= htmlspecialchars($_POST['password']);
   
}



  $pdo=getpdo();
$requette=$pdo->prepare('INSERT INTO admin(nom, prenom, email,password) value(?,?,?,?)');
$requette->execute (array($nom,$prenom,$email,$password)); 






}


 
 
 
 
 
   

   
}