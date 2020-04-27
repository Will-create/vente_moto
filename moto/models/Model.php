<?php


require_once('models/Database.php');


abstract class Model{
      
   protected $pdo;
   protected $table;
      
      public function __construct(){
            $this->pdo=getpdo();
            
      }
      
public function find(int $id){
      
    
 $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id_{$this->table} = :id");

// On exécute la requête en précisant le paramètre :article_id 
$query->execute(['id' => $id]);

// On fouille le résultat pour en extraire les données réelles de l'article
$item= $query->fetch();

return $item;

}



function verif(){

if(isset($_POST['email']) AND isset($_POST['password']))
{
    $email=htmlspecialchars($_POST['email']);
    $pwd=htmlspecialchars($_POST['password']);
        $requette =$this->pdo->prepare('SELECT * FROM admin WHERE email =:email AND password =:pwd ');
        $requette->execute(array('email'=>$email, 'pwd'=>$pwd));
        $resp=$requette->fetch();
        if($resp)
        {
              
            return 'ok';
        }
        else
        {
            $erreur="mot de passe ou nom d'utilisateur incorect";
            return $erreur;
        }
}  
}  

public function findAllByMarque($id_patient):array{
      
 $query = $this->pdo->prepare("SELECT * FROM moto WHERE id_{$this->table}= :id_patient");
$query->execute(['id_patient' => $id_patient]);
$motos = $query->fetchAll();

      
      return $motos;
}

public function delete(int $id){
   
$query = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id_{$this->table} = :id");
$query->execute(['id' => $id]);
}

public function findAll(?string $order=""){
      
      $sql="SELECT * FROM {$this->table} ";
     if ($order){
           $sql= $sql.' ORDER BY '.$order;
     }
  
  $resultats = $this->pdo->query($sql);
// On fouille le résultat pour en extraire les données réelles
$items= $resultats->fetchAll();


return $items;
}




}