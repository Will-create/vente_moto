<?php



if (isset($_GET['url'])) {
      

require_once('controls/routeur.php');
$routeur=new Routeur();
       
$routeur->routReq();
}else{
      
      
      
      
      
      require_once('controls/ControleurHome.php');
      
      $controleur=new ControleurHome();
      
      $controleur->welcome();
      
      
      
      
}
      
      
 
