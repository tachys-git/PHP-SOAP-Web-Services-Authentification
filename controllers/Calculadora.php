<?php

class  CalculadoraController extends Controller {

  //metodo que se llama para hacer cualquier llamada al ws
  public  function __call($method_name,$arguments)   {
    if(!method_exists($this, $method_name)) {
        throw new SoapFault($this->no_method_server_error, '-- Error '.$method_name.'() -- '.$this->no_method_description_error );
    } else {

        if ($this->authenticated){
            return call_user_func_array(array($this, $method_name), $arguments);
        } else {
           throw new SoapFault($this->authentication_server_error, $this->authentication_description_error);
        }
    }
  }


  private function multiplica($x, $y) {
    return $x * $y;
  }

  public function suma($x, $y) {
   return $x + $y;
  }

  private function resta($x, $y) {
   return $x - $y;
  }

  private function multiplica2 ($x,$y){
  	$resultado = 0;
  	for ($i=1; $i<=$x/2; $i++) {
  		$resultado = $this->suma($y,$y);
  	}
      
 	   return $resultado;
  }
}

?>