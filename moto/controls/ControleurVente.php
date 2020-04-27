<?php
require_once('models/autoload.php');
class ControleurVente{
      protected $model;
      protected $redirect;
      protected $rendu;
      protected $moto;
      


      function __construct(){ 
        $this->model=new Vente();
        $this->redirect=new Http();
        $this->rendu=new Render();
        $this->moto=new Moto();
      }
      
      


  
      public function form(){
           



 
           $id= null;
// Mais si il y'en a un et que c'est un nombre entier, alors c'est cool
if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {
    $id= $_GET['id'];
}
           
      $this->model->insertVente();
      $moto=$this->moto->find($id);
      $id_moto=$moto['id_moto'];   
       
      $this->redirect->vers('./liste');
           
           
     }
      public function liste(){

            


 




/**
* 2. Récupération des ventes
* */


$ventes=$this->model->findAll('id_vente asc');
        

        



/**
 * 3. Affichage
 */
 

$pageTitle = "Liste_des_ventes";

$this->rendu->render('vente',compact('pageTitle',
  'ventes'));
        
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
}else{


















$infos=$this->model->findAllByMarque($id);
$vente=$this->model->find($id);





/**
 * 5. On affiche 
 */
 
 
$pageTitle= $vente['id_vente'];
$id_vente=$vente['id_vente'];

$this->rendu->render('detailvente',compact('pageTitle',
  'infos',
  'id_vente'));




            
            
   }          
 }
      
      
      
      
     
    
      
      
      
      
      
      
      
      public function delete(){
            //supprimer une marque
            
            
            
       
/**
 * DANS CE FICHIER, ON CHERCHE A SUPPRIMER L'ARTICLE DONT L'ID EST PASSE EN GET
 * 
 * Il va donc falloir bien s'assurer qu'un paramètre "id" est bien passé en GET, puis que cet article existe bel et bien
 * Ensuite, on va pouvoir effectivement supprimer l'article et rediriger vers la page d'accueil
 */

$id = $_GET['id'];

/**
 * 1. On vérifie que le GET possède bien un paramètre "id" (delete.php?id=202) et que c'est bien un nombre
 */
 
if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
    die("Ho ?! Tu n'as pas précisé l'id de la marque!");

}


/**
 * 2. Connexion à la base de données avec PDO
**/










/**
 * 3. Vérification que l'article existe bel et bien
 */
 

$vente=$this->model->find($id);

if (!$vente) {
    die("La marque $id n'existe pas, vous ne pouvez donc pas la supprimer !");
}

/**
 * 4. Réelle suppression de l'article
 */
 
$this->model->delete($id); 
/**
 * 5. Redirection vers la page d'accueil
 */
 
$this->redirect->vers("./liste");


            
      }
      

}