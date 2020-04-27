<?php


 try
        {
            
            $url ="";

            if (isset($_GET['url'])) 
            {
                $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));
                $controleur = ucfirst(strtolower($url[0]));
                $action=ucfirst(strtolower($url[1]));
                $controleurClass = 'controleur'.$controleur;
                $fichierControleur = 'controls/'.$controleurClass.'.php';

                if (file_exists($fichierControleur)) 
                {
                    require_once($fichierControleur);
                    self::$ctrl = new $controleurClass($action);
                }else 
                    throw new Exception('Page introuvable');
                }

            }else{
                require_once('controls/ControleurMarque.php');
                $this->_ctrl= new ControleurMarque($url=null);    
            }   $this->_ctrl->afficher();

        
        
        catch (Exception $e) 
        {
            $errorMsg=$e->getMessage();
            require_once('vues/errorMsg.php');
        }