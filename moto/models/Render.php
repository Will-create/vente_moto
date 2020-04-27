<?php


class Render{
      private $path;
      private $variables;

      function __construct(){
   $this->path='';
   $this->variables=[];


      }
     public function render(string $path,$variables=[]){
   //a chaque fois que j'ai le tableau associatif suivant
   //['var1'=>2]
   // qu'il y'a réellement après transformation une variables
   //$var1 =2;
   
         extract($variables);
   

         ob_start();
          require('vues/template/'.$path.'.html.php');
         $pageContent = ob_get_clean();

        require('vues/template/layout.html.php');
   
      }
 
      
      
      
}