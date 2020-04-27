<?php



require_once('models/Model.php');
class Moto extends Model{
      
      protected $table='moto';
      
      
  

public function findMoto(int $id){
      
    
 $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id_{$this->table} = :id");

// On exécute la requête en précisant le paramètre :article_id 
$query->execute(['id' => $id]);

// On fouille le résultat pour en extraire les données réelles de l'article
$item= $query->fetch();

return $item;

}

public function insertMoto(){
      
      




$model = null;
if (!empty($_POST['model'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $model = htmlspecialchars($_POST['model']);
}

$id_marque= null;
if (!empty($_POST['id_marque'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $id_marque= htmlspecialchars($_POST['id_marque']);
}

$prix= null;
if (!empty($_POST['prix'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $prix= htmlspecialchars($_POST['prix']);
}


$cylindre= null;
if (!empty($_POST['cylindre'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $cylindre= htmlspecialchars($_POST['cylindre']);
}

$stock= null;
if (!empty($_POST['stock'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $stock= htmlspecialchars($_POST['stock']);
}
$photo= null;
if (!empty($_FILES['photo'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
     $photo= $_FILES['photo'];    
         
}


move_uploaded_file($photo['tmp_name'], '/style/img/'.$model.'logo.jpg');


  $pdo=getpdo();
$requette=$pdo->prepare('INSERT INTO moto(id_marque,model, cylindre, stock,prix,photo) value(?,?,?,?,?,?)');
$requette->execute (array($id_marque,$model,$cylindre,$stock,$prix,'../style/img/'.$model.'logo.jpg')); 






}
  
}