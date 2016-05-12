<?php

class Controller {

 	protected $authenticated = false;
 	protected $authentication_server_error = "Server-Authentication";
 	protected $authentication_description_error = "Please check your authentication data";
    protected $no_method_server_error = "Server-Method";
    protected $no_method_description_error = "Method don´t exists";
    

    //metodo que ese aencarga de autenticar el booking_origin user en la base de datos
    public function AuthHeader($Header)   {

        if ($Header->username=="1" and $Header->password=="1234") {
            throw new SoapFault($this->authentication_server_error, $this->authentication_description_error);
        } else {
        	$this->authenticated = true;
        }
    }



}

?>