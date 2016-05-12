<?php

require_once('includes.php');

$server = new SoapServer (null, array('uri' => 'urn:TCNS'));

$server->setClass('CalculadoraController');

$server->handle();

?>