<?php
	error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");
	
	$smarty = new confSmarty();
	$smarty->setModule("question");

	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/questionModel.php");
	$model = new questionModel($conn->db);

	$id_question=trim($_POST['id_question']);
	$quetype=trim($_POST['assessmentType']);
	$question=trim(ucfirst($_POST['question']));
	$guideline=trim(ucfirst($_POST['guideline']));
	$DisplayOrder=trim($_POST['DisplayOrder']);
	$matCat=trim($_POST['matCat']);
	$matLev=trim($_POST['matLev']);
	$Weight=trim($_POST['Weight']);
	$floorVerif=trim(ucwords($_POST['floorVerif']));

if ($_SERVER["REQUEST_METHOD"] == "POST"){


				if (empty($question)) {
					$questionErr= "**Error** Question description is required.";
				 	$smarty->assign("questionErr",$questionErr);
					$error=true;
				}  

				if ( empty($guideline)) {
					$guideErr= "**Error** Question guidelines  date is required.";
				 	$smarty->assign("guideErr", $guideErr);
					$error=true;
				}  
				if (empty($DisplayOrder)) {
					$displayErr= "**Error** A display order is required.";
				 	$smarty->assign("displayErr",$displayErr);
					$error=true;
				}  elseif(!ctype_digit($DisplayOrder)){
					$displayErr= "**Error** Disply order has to be a number.";
					$smarty->assign("displayErr",$displayErr);
					$error=true;
				}
		 		 
		 		 if(!empty($Weight) && !ctype_digit($Weight)){
					$weightErr= "**Error** Question weight has to be a number.";
					$smarty->assign("weightErr",$weightErr);
					$error=true;
				}

		}//end if validation

	//UPDATE QUESTION

				if(!$error){ 

					$model-> updateQuestion($id_question,$quetype,$question,$guideline,$DisplayOrder,$matCat,
											$matLev,$Weight,$floorVerif);
				   
					$questions = $model->getListQuestions();
					$smarty->assign("question_List", $questions);  
					$smarty->display("displayQuestion.tpl"); 

	 			} elseif ($error) {
 
					$displayQuestion=$model->displayQuestionByID($id_question);

					$questType=$model->getAssessmentType();
					$smarty->assign("questType",$questType);

					$category=$model->getCategory(); 
					$levels=$model->getLevels(); 

					$smarty->assign("displayQuestion", $displayQuestion); 
					$smarty->assign("category",$category);
					$smarty->assign("Levels",$levels);
					$smarty->assign("quest",$quest);
					$smarty->assign("cat",$cat);
					$smarty->assign("lev",$lev);  
					$smarty->assign("floor",$floor);  
					$smarty->display("edit_formQuestion.tpl");
	 			}




?>