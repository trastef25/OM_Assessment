
<?php
session_start();
error_reporting(E_PARSE);
require("../_config/mvc/confsmarty.php");
$smarty = new confsmarty();
$smarty->setModule("assessment");

require("../_config/database/Connection.php");
$conn = new Connection(); 

require("model/assessmentModel.php");
$model = new assessmentModel($conn->db);


$idCuestionario =  $_POST["idCuestionario"];

/*
echo "<pre>";
echo print_r($_POST);
echo "</pre>";
exit;
*/
/*
    $_POST["idQ"];
    $_POST["catQ"];
    $_POST["levelQ"];
    $_POST["valQ"];
*/
/*
echo "<pre>";
//echo $_POST["idQ"];
print_r($_SESSION['assessment'][$_POST["catQ"]]["level"][$_POST["levelQ"]]["preguntas"][$_POST["idQ"]-1]);
echo "</pre>";
exit;
*/

$_SESSION['assessment'][$_POST["catQ"]]["level"][$_POST["levelQ"]]["preguntas"][$_POST["idQ"]-1]["respuesta"] = $_POST["valQ"];
 /*
echo "<pre>";
//echo $_POST["idQ"];
print_r($_SESSION['assessment'][$_POST["catQ"]]["level"][$_POST["levelQ"]]["preguntas"]);
echo "</pre>";
exit;
 */
/*echo $_POST["idQ"];
echo $_POST["catQ"];
echo $_POST["levelQ"];
*/
$sesionLevel=$_SESSION['assessment'][$_POST["catQ"]]["level"][$_POST["levelQ"]]["nombre"]; 
$sesionCat=$_SESSION['assessment'][$_POST["catQ"]]['category']; 
$sessionAnswers=$_SESSION['assessment'][$_POST["catQ"]]["level"][$_POST["levelQ"]]["preguntas"] ;



 $cantidad=0;
 $assessmentStatus;
$answer;
 $focusStatus;          
 $standardizeStatus;    
 $planStatus;           
 $organizeStatus;       
 $improveStatus;
 $visualizeStatus;
 $overallRating;
 $overallScore;

 $arrayLength=sizeof($sessionAnswers);
 echo$sesionLevel." -- ";
 echo$sesionCat." -- ";




	
	foreach ($sessionAnswers as  $value) {
 print_r($value  );

   
 			  if (  $sesionLevel==$sesionLevel){ 

					   if (  $value["respuesta"]=="Yes") {

			                $cantidad++;

			               if ($cantidad== $arrayLength) {
			               	   $answer=$sesionLevel; 

			               } 
							
					   }
				echo $arrayLength;
			} 
 
}//foreach
//echo  $cantidad;
echo  $focusStatus=$answer;
/*
               if ($cantidad== $arrayLength) {
               	  echo "Stable";  
               	  $cantidad=0;
               	   $focusStatus=$sesionLevel;
               }else if ($cantidad< $arrayLength) {
               	$focusStatus="No Stable";
               }

 */






 
 $categoryType= $model->getMatCategory($idCuestionario);
$smarty->assign("focusStatus",$focusStatus);
$smarty->assign("categoryType",$categoryType);
$smarty->display("boxResult.tpl");

/*
require("../_config/mvc/confsmarty.php");
$smarty = new confsmarty();
$smarty->setModule("assessment");

require("../_config/database/Connection.php");
$conn = new Connection(); 

require("model/assessmentModel.php");
$model = new assessmentModel($conn->db);

$allTeams=$model->getAllTeams();
$smarty->assign("teams_name",$allTeams);
 

$allQuestionaries=$model->getAllQuestionaryType();
$smarty->assign("questionary_Type",$allQuestionaries);

	$id = $_POST['id_assessment'];
	$inDate = $_POST['iniDateAssessmet'];
	$fnlDate = $_POST['fnlDateAssessmet'];
	$teamA = $_POST['teamAssessmet'] ;
	$OeUser = $_POST['OpExUser'];
	$StatusA = $_POST['status'];
 	$questA = $_POST['questType'];
	$gnlCmmt = $_POST['gnlComments'];


	$totalQuestions=$model->getTotalQuestions();
	

	echo  $id, $inDate, $fnlDate, $teamA, $OeUser,  $questA,	
          $gnlCmmt, $totalQuestions;
		  $categoria;

 // Including PHP Class for calculation of the answer of the assessment
require("../calcOMAssessment.php"); 
$instanceAssessment = new calcOMAssessment();

 	$status="Completo";
	for($i=1; $i<=$totalQuestions; $i++){

		  if (empty($_POST["qResponse".$i])){	
		
		  		 	$status="Incompleto".$i;//--TMG Borrar para probar
	    			$_POST["qResponse".$i]="";
	      } //end IF

		   $instanceAssessment->setAssessmentStatus($status);// llamando a la clase
		   
		   if($_POST["qResponse".$i]== "Yes"){

		   	echo "Yes".$i;
		   		 $arrInfo=$model->getCatLevbyQuestion($i);//Se puede borrar revisar
		   		 $instanceAssessment->getCatLevbyQuestionID($arrInfo);
		   }else if($_POST["qResponse".$i]== "No"){
		   	echo "No".$i;
		   }
	 } //end FOR

$smarty->assign("assessmentStatus", $instanceAssessment->getAssessmentStatus());


	// $questions = $model->getQuestions($questA);
	// $smarty->assign("questionList",$questions);






*/

?>