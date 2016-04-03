<?php

require ("../resources/libs/smarty/libs/Smarty.class.php");// lo primero que tengo que hacer es inclir la clase que voy a usar
// le digo que  herede de Smarty
class confSmarty extends Smarty{ 
//recordar que toda clase tiene que tener un constructor
  //le tengo que pasar unos parametros necesarios que requiere esta clase
  public function __construct (){

  	parent::__construct(); // esta es la forma correcta de heredar del padre en php

  	$this->template_dir = ""; // hay definir donde va a estar mi plantillas estos datos se van a pasar por parametros
  	$this->compile_dir  = ""; // decir donde va a estar mi complilado este dato se va  apasar por parametro
  	$this->config_dir   = "../_config/mvc";

  }	
// esta funcion es para indicar en que modulo estoy posicionado
  function setModule($modulox){

  	$this->template_dir = "../$modulox/view";  //modulox es el parametro que le voy a mandar cuando invoque la funcion
  	$this->compile_dir  = "../$modulox/view/compiled"; //importante tengo que mandar donde va a estar el compilado que 
                                                      // es necesario para smarty 		

  }



}

?>