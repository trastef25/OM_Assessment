<?php
	
	error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("question");


	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/questionModel.php");
	$model = new questionModel($conn->db);


	//Validation Data

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


				if ( empty($question)) {
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

	//ADD TEAM

				if(!$error){ 

					$model->insertQuestion($id_question,$quetype,$question,$guideline,$DisplayOrder,
	    								   $matCat,$matLev,$Weight,$floorVerif);
				   
					$questions = $model->getListQuestions();
				 
					$smarty->assign("question_List", $questions);  
					$smarty->display("questionViewIndex.tpl");  

	 			} elseif ($error) {

					$maxIDQues=$model->getMaxIDQuest();
					$smarty->assign("maxIDQues", $maxIDQues);

					$levels=$model->getLevels();
					$smarty->assign("levels",$levels);
				 
					$categories=$model->getCategory();
					$smarty->assign("categories",$categories);

					$assessmentType=$model->getAssessmentType();
					$smarty->assign("atype", $assessmentType);

					//Sending Values
			 
					 	$smarty->assign("qtype",$quetype);
 						$smarty->assign("ques",$question);
						$smarty->assign("guide",$guideline);
						$smarty->assign("display",$DisplayOrder);
						$smarty->assign("weight",$Weight);
						 $smarty->assign("lev",$matLev);
						$smarty->assign("cat",$matCat);								
					 	$smarty->assign("floor",$floorVerif); 	

					$smarty->display("addformQuestion.tpl");
	 			}



?>


