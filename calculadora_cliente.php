<?php

$auth =  array ("username" => '1',	"password" => '1234'); 
$location = 'http://localhost/calculadora_servicio.php'; //Web Services  location
$uri = 'urn:TCNS'; //Web Services uri 
$location_headers = 'http://localhost/';//Web Services headers location

$client = new SoapClient(null, array('location' => $location, 'uri' => $uri, )); 
$auth_vals = new SoapVar ($auth, SOAP_ENC_OBJECT);
$header = new SoapHeader($location_headers, 'AuthHeader', $auth_vals);
$client->__setSoapHeaders($header);

try {
	
	$details = $client->multiplica(5,4);
	echo "<pre>5 * 4 = "; print_r($details); echo "</pre>";
	$details = $client->suma(5,4);
	echo "<pre>5 + 4 = "; print_r($details); echo "</pre>";
	$details = $client->resta(5,4);
	echo "<pre>5 - 4 = "; print_r($details); echo "</pre>";
	$details = $client->multiplica2(5,4);
	echo "<pre>5 *4 = "; print_r($details); echo "</pre>";
 	
		
	
} catch (Exception $e) {
	trigger_error($e);
}



?>