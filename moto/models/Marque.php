<?php



require_once('models/Model.php');
class Marque extends Model{
      
      protected $table="marque";
      
      
  


 public function findMarque(int $id){
      
    
 $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id_marque = :id");

// On exécute la requête en précisant le paramètre :article_id 
$query->execute(['id' => $id]);

// On fouille le résultat pour en extraire les données réelles de l'article
$item= $query->fetch();

return $item;
}

public function insertMarque(){
      
      




$nom = null;
if (!empty($_POST['Nom_de_la_marque_'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $nom = htmlspecialchars($_POST['Nom_de_la_marque_']);
}
$logo='';
if (!empty($_FILES['logo'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
     $logo= $_FILES['logo'];

    
   

      
}





























 move_uploaded_file($logo['tmp_name'], '../style/img'.$nom.'logo.jpg');
 $pdo=getpdo();
$requette=$pdo->prepare('INSERT INTO marque(Nom_de_la_marque_, logo) value(?,?)');
$requette->execute (array($nom,'style/img/'.$nom.'logo.jpg'));


      
      
      
      
      
      
      
}
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
   

   
}