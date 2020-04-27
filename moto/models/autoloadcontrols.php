<?php

spl_autoload_register(function ($class){
      ucfirst(strtolower($class));
      
      
      require_once('controls/'.$class.'.php');
});



