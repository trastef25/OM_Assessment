<?php
session_start();
/*
// This is the module to build the assessment per questionary type
// The controller is the intermediary between the view and the model
*/
/*================= Borrar despues===================*/
error_reporting(E_PARSE);
//no  es error es una variable inicializada
/*==================================================*/

// Including Smarty configuration
require("../_config/mvc/confsmarty.php");
$smarty = new confsmarty();
$smarty->setModule("assessment");

// Including Database Connection
require("../_config/database/Connection.php");
$conn = new Connection(); 
require("model/assessmentModel.php");
$model = new assessmentModel($conn->db);

// variable sent frm assessmentIndexView.tpl 
$idQuest=$_POST['assessmentType'];
$team=$_POST['assessmentTeams']; 

$smarty->assign("ID_assessment",$idQuest);
// Consulting the model to use the method getQuestions 
// to get array of all the questions from the DB after that 
// throw the array to the method getOptXquestions
// this method allows to get all the options per questions
// then we assign the array to smarty to display  the questions with the 
// answer options.

$questions = $model->getQuestions($idQuest);
$optXquestions=$model->getOptXquestions($questions);
$smarty->assign("questions",$optXquestions);

$listCategories = $model->getAllCat($idQuest);


/*--TMG BORRAR */
/*echo "<pre>";
print_r($optXquestions);
echo "</pre>"; */
 /*

 // Start session assessment
 session_start();

*/

// The following lines just filter the information we need to make the array and insert the info in
//the session variable


$arrayNewQuest = array();
foreach ($listCategories as $myCategory) {
	//echo $myCategory;		
	$cont = 0;
	foreach ($optXquestions as $questionList) {
			/*
			echo "<pre>";
		 	print_r($questionList[0]);
			echo "</pre>";
			*/
			//Busca la categoria en el arreglo que trae todos los datos de la base de datos(preguntas +opciones)
			
			if($myCategory == $questionList[0]["category"]){
				
				//print_r($arrayNewQuest[$myCategory]["category"]);
				//echo "***";
				//$status = in_array($myCategory, $arrayNewQuest);


				//In_array esta haciendo un search de la categoria en el arreglo que estamos construyendo
				//si no encuentra la categoria y el nivel los agrega al $arrayNewQuest

				if(in_array_r($myCategory, $arrayNewQuest[$myCategory])){
					//echo "CATEGORY: SI ESTA <hr />";
					$levelName = $questionList[0]["level"];
					if (in_array_r($levelName, $arrayNewQuest[$myCategory]["level"][$levelName])) {
						//echo "Nivel Esta <br />";

						array_push($arrayNewQuest[$myCategory]["level"][$levelName]["preguntas"], array("id"=>$questionList[0]["question_ID"], "respuesta"=>"none"));
					}else{
						//echo "Nivel NO Esta <br />";
						$levelInfo = array("nombre"=>$levelName, "preguntas"=>array(0=>array("id"=>$questionList[0]["question_ID"], "respuesta"=>"none")));
						$arrayNewQuest[$myCategory]["level"][$levelName] = $levelInfo;
						//array_merge($arrayNewQuest[$myCategory]["level"],$levelInfo);
						//array_push($arrayNewQuest[$myCategory]["level"], $levelInfo);
					}

				}else{
					//echo "CATEGORY:  NO ESTA <hr />";
					//$data["category"] = $myCategory;
					//$data["level"] = "";
					 $arrayNewQuest[$myCategory] = array("category"=>$myCategory, "level"=>array($questionList[0]["level"] =>array("nombre"=>$questionList[0]["level"], "preguntas"=>array(0=>array("id"=>$questionList[0]["question_ID"], "respuesta"=>"none")))));
				}

				$cont++;
			}
	}

	//echo "<hr />";
}
	
/*
 	echo "<pre>";
	print_r($arrayNewQuest);
	echo "</pre>";
	exit;
	*/
	
	//echo $cont;

 
$_SESSION['assessment'] = $arrayNewQuest;
 
/*
echo "<pre>  Imprime var session" ;
print_r($_SESSION['assessment']);
echo "</pre>"; 
exit;
*/

// Consulting the model to use the method getMatCategory
// to get array of all the categories from the DB 
$categoryType= $model->getMatCategory($idQuest);
$smarty->assign("categoryType",$categoryType);

// Consulting the model to use the method getAllTeams
// to get array of all the teams from the DB  
$teamByID=$model->getAllTeamsbyID($team);
$smarty->assign("team_name",$teamByID);
 

// Consulting the model to use the method getAllQuestionaryType
// to get array of all the questionary types from the DB 
$quest=$model->questionaryById($idQuest);
$smarty->assign("quest",$quest);
 


// Including PHP Class for calcultion of the answer of the assessment
require("../calcOMAssessment.php"); 
$calc =new calcOMAssessment();
$smarty->assign("assessmentStatus", $calc->assessmentStatus);


// PHP var to get the current Date and assign it to display
$date=date('y-m-d');
$smarty->assign("currentDate",$date);
//Asignando la variable a smarty para enviarla por ajax
$smarty->assign("ID_CUESTIONARIO",$idQuest);
// smarty way to display html file
 $smarty->display("newAssessmentForm.tpl");



// This function allows to push an array of data avoiding an indexation.
function in_array_r($needle, $haystack, $strict = false) {
    foreach ($haystack as $item) {
        if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
            return true;
        }
    }

    return false;
} //end Fx in_array_r

?>


