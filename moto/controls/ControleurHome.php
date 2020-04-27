


<?php
require_once('models/autoload.php');
class ControleurHome{
      protected $model;
      protected $redirect;
      protected $rendu;
      


      function __construct(){ 
        $this->model=new Marque();
        $this->redirect=new Http();
        $this->rendu=new Render();
      }
      
      public function index(){
      
      
      
      $pageTitle='Accueil';
      $entreprise='EDIF-WP';
      $this->rendu->render('home',compact('pageTitle','entreprise'));    
            
          
       
      }
      



      public function welcome(){
      
      
      
      $pageTitle='Accueil';
      $entreprise='EDIF-WP';
      $this->rendu->render('welcome',compact('pageTitle','entreprise'));    
            
          
       
      }
      






}


