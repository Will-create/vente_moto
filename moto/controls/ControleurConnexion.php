<?php
require_once('models/autoload.php');
class ControleurConnexion{
      protected $model;
      protected $redirect;
      protected $rendu;
      


      function __construct(){ 
        $this->model=new Admin();
        $this->redirect=new Http();
        $this->rendu=new Render();
      }
      public function login(){
      
      $verification=$this->model->verif();
      if($verification=='ok'){
        $entreprise='EDIF-WP';
         $pageTitle='Home';
         header('Location: ../marque/liste');
      }else{

       $erreur="Mot de passe ou email incorrect";
       $entreprise='EDIF-WP';
         $pageTitle='Home';
        $this->rendu->render('login',compact('pageTitle','entreprise',
                               'pageTitle',
                                'erreur'));

      }
      
      
          
       
      }
      public function signin(){
      
      
      $this->model->insertAdmin();
      $entreprise='EDIF-WP';
         $pageTitle='Home';
         header('Location: ../formulaire/login');
      
      
          
       
}
      public function logout(){

      header('Location: ../formulaire/login');







      }

      




      




}


