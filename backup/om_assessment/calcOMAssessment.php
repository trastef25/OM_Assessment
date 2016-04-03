<?php

//Esta clase me va a permitir la conexion con la libreria de adodb que esta en resorce
class calcOMAssessment{

  var $assessmentStatus;    // indica el estado general del assessment
  var $focusStatus;         // indica el estado general del assessment
  var $standardizeStatus;   // indica el estado general del assessment
  var $planStatus;          // indica el estado general del assessment
  var $organizeStatus;      // indica el estado general del assessment
  var $improveStatus;
  var $visualizeStatus;
  var $overallRating;
  var $overallScore;

  var $arr = array();

   public function __construct() { //esta es la forma correcta de generar un constructor en php
    $this->assessmentStatus     = "Incomplete";
   /* $this->$focusStatus       = "";
    $this->$standardizeStatus   = "";
    $this->$planStatus          = "";
    $this->$organizeStatus      = "";
    $this->$improveStatus       = "";
    $this->$visualizeStatus     = "";*/


  }// fx const


public function setAssessmentStatus($status){
    $this->assessmentStatus    = $status;
}// end Fx setAssessmentStatus


public function getAssessmentStatus(){
     
    echo $this->assessmentStatus; 
}

public function  getCatLevbyQuestionID($arrInfo){

      $arr[]=$arrInfo;

      for ($i=0; $i <sizeof($arr) ; $i++) { 
        echo "<pre>";
        print_r($arr[$i]);
        echo "</pre>";

        if ($arr[$i]==1) {
           # code...
              echo "Hola";

         }

      }   

      
}














}//end class

?>