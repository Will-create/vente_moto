<?php
require_once('models/autoload.php');


class ControleurMoto {


      protected $model;
      protected $redirect;
      protected $rendu;
      protected $sale;
      protected $marque;
      


      function __construct(){ 
        $this->model=new Moto();
        $this->redirect=new Http();
        $this->rendu=new Render();
        $this->sale=new Vente();
        $this->marque=new Marque();
      }
      
      


  
      

            

      public function vendre(){
/**
* 2. Récupération de la moto
* */

$id = null;
// Mais si il y'en a un et que c'est un nombre entier, alors c'est cool
if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {
    $id= $_GET['id'];
}

// On peut désormais décider : erreur ou pas ?!
if (!$id) {
    die("Vous devez préciser un paramètre `id` dans l'URL !");
}else{

$moto=$this->model->find($id);
$id_marque=$moto['id_marque'];
$marque=$this->marque->find($id_marque);

$nom_marque=$marque['Nom_de_la_marque_'];
 
$pageTitle= $moto['model'];


$this->rendu->render('saleAPI',compact('pageTitle',
  'moto','nom_marque'));

}
      }
      
      
      



public function detail(){
            //montrer un seul articles
$id = null;
// Mais si il y'en a un et que c'est un nombre entier, alors c'est cool
if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {
    $id= $_GET['id'];
}

// On peut désormais décider : erreur ou pas ?!
if (!$id) {
    die("Vous devez préciser un paramètre `id` dans l'URL !");
}

$moto=$this->model;
$infos=$moto->findMoto($id);

 
 
$pageTitle=$infos['model'];


$this->rendu->render('detailmoto',compact('pageTitle',
  'infos'));    
      }
      
      
      
      
     public function form(){
           



 
           $id= null;
// Mais si il y'en a un et que c'est un nombre entier, alors c'est cool
if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {
    $id= $_GET['id'];
}
           
      $this->model->insertMoto();     
       
      $this->redirect->vers('../marque/detail?id='.$id);
           
           
     }
      
      
      
      
      
      
      
      public function delete(){
            //supprimer une moto
            
          
if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
    die("Ho ?! Tu n'as pas précisé l'id de la moto!");

}
$id = $_GET['id'];

$moto=$this->model->find($id);

if (!$moto) {
    die("La moto $id n'existe pas, vous ne pouvez donc pas la supprimer !");
}

/**
 * 4. s suppression de l'article
 */
 
$this->model->delete($id);

 $id_marque=$moto['id_marque'];
/**
 * 5. Redirection vers la page d'accueil
 */
 
$this->redirect->vers('../marque/detail?id='.$id_marque);


            
      }
      

}

?>