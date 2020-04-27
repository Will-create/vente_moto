<?php

spl_autoload_register(function ($class){
      ucfirst(strtolower($class));
      
      
      require_once('models/'.$class.'.php');
});



