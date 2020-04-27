<?php
require_once('models/autoload.php');
class ControleurMarque{
      protected $model;
      protected $redirect;
      protected $rendu;
      protected $moto;
      


      function __construct(){ 
        $this->model=new Marque();
        $this->redirect=new Http();
        $this->rendu=new Render();
        $this->moto=new Moto();
      }
      
      


  
      
      public function liste(){

            


 




/**
* 2. Récupération des articles
* */


$marques=$this->model->findAll('id_marque asc');
        

        



/**
 * 3. Affichage
 */
 

$pageTitle = "Accueil";

$this->rendu->render('index',compact('pageTitle',
  'marques'));
        
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

/**
 * 2. Connexion à la base de données avec PDO
**/














/**
 * 3. Récupération de l'article en question
 * On va ici utiliser une requête préparée car elle inclue une variable qui provient de l'utilisateur : Ne faites
 * jamais confiance à ce connard d'utilisateur ! :D
 */
 
/**
 * 4. Récupération des commentaires de l'article en question
 * Pareil, toujours une requête préparée pour sécuriser la donnée filée par l'utilisateur (cet enfoiré en puissance !)
 */




$motos=$this->model->findAllByMarque($id);
$marque=$this->model->find($id);





/**
 * 5. On affiche 
 */
 
 
$pageTitle= $marque['Nom_de_la_marque_'];
$id_marque=$marque['id_marque'];

$this->rendu->render('moto',compact('pageTitle',
  'motos',
  'id_marque'));




            
            
            
      }
      
      
      
      
     public function form(){
           
           
      $this->model->insertMarque();     
           
      $this->redirect->vers('./liste');
           
           
     }
      
      
      
      
      
      
      
      public function delete(){
            //supprimer une marque
            
            
            
       
/**
 * DANS CE FICHIER, ON CHERCHE A SUPPRIMER L'ARTICLE DONT L'ID EST PASSE EN GET
 * 
 * Il va donc falloir bien s'assurer qu'un paramètre "id" est bien passé en GET, puis que cet article existe bel et bien
 * Ensuite, on va pouvoir effectivement supprimer l'article et rediriger vers la page d'accueil
 */

/**
 * 1. On vérifie que le GET possède bien un paramètre "id" (delete.php?id=202) et que c'est bien un nombre
 */
 
if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
    die("Ho ?! Tu n'as pas précisé l'id de la marque!");

}
$id = $_GET['id'];

/**
 * 2. Connexion à la base de données avec PDO
**/










/**
 * 3. Vérification que l'article existe bel et bien
 */
 

$marque=$this->model->find($id);

if (!$marque) {
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