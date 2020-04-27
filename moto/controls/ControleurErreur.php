<?php
require_once('models/autoload.php');
class ControleurErreur{
      protected $rendu;
      


      function __construct(){ 
        $this->rendu=new Render();
      }
      
      public function erreur404(){
      
      
      
      $pageTitle='Page Introuvable';
      $entreprise='EDIF-WP';
      $this->rendu->render('erreur',compact('pageTitle','entreprise'));    
            
          
       
      }
      

      




      




}


