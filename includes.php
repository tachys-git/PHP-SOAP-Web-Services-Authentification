<?php

define('__ROOT__', dirname(dirname(__FILE__))); 
define('__WSPATH__',__ROOT__."/WS");//Path donde estan alojados los ws

//configuracion
require_once (__ROOT__.'/config/config.php');

//Modelos
define ("PATH_MODELS",__WSPATH__."/models");


//Controladores
define ("PATH_CONTROLLERS",__WSPATH__."/controllers");
require_once (PATH_CONTROLLERS."/Controller.php");
require_once (PATH_CONTROLLERS."/Calculadora.php");

?>
