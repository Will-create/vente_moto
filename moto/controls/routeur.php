<?php


class Routeur{
    protected $ctrl;
    protected $url=[];
      
    
    
    public function go(){
          
          $controleur = ucfirst(strtolower($this->url[0]));
                
                $controleurClass = 'Controleur'.$controleur;
                $fichierControleur = 'controls/'.$controleurClass.'.php';
                $action=ucfirst(strtolower($this->url[1]));
      
                       

                        require_once($fichierControleur);

                          
                        $this->ctrl=new $controleurClass();
                        if(method_exists($this->ctrl,$action)){
                          $this->ctrl->$action();
                            }else{


                        $this->url[0]=='erreur';
    
                         require_once('ControleurErreur.php');

                          
                        $this->ctrl=new ControleurErreur();
                        $this->ctrl->erreur404();

                            }
}

                          

                  
                       

                          
                        


                        
                        
                         
            
          
          

    public function routReq(){
      
       
        
            $this->url= explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));

       
       
       
       
      try{

       if ($this->url[0]=='marque') {
                $this->go();
                
        }elseif ($this->url[0]=='formulaire') {
              
              $this->go();
        }elseif ($this->url[0]=='moto') {
              
              $this->go();
        }elseif($this->url[0]=='vente'){
              $this->go();
        }elseif($this->url[0]=='home'){
              $this->go();
        }elseif($this->url[0]=='connexion'){
              $this->go();
        }
        
        
       else{
            $this->url[0]=='erreur';


                        require_once('ControleurErreur.php');

                          
                        $this->ctrl=new ControleurErreur();
                        $this->ctrl->erreur404();
                        
        }
        
        
        
         
              
              
              
              
              
              
           
                 
       }catch (Exception $e){
        $erreur=$e->getMessage();
        echo $erreur;
       }     
    }
    
    
    

    
    
    
    
    
    
    
}