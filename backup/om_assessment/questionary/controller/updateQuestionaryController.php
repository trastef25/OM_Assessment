<?php
    error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("questionary");


	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/questionaryModel.php");
	$model = new questionaryModel($conn->db);

	$id=$_POST['idQuestionary'];
	$quest=trim(ucwords($_POST['questionayType']));
	$desc=trim($_POST['description']);
 
 	if ($_SERVER["REQUEST_METHOD"] == "POST"){

				if (empty($quest)) {
					$questErr= "**Error** A questionary name is required";
					$smarty->assign("questErr",$questErr);
					$error=true;
				} //end if ID

				if (empty($desc)) {
					$descErr= "**Error**  A description is required.";
				 	$smarty->assign("descErr",$descErr);
					$error=true;
				}  
			
		}//end if validation
 
	//UPDATE LEVEL

				if(!$error){ 

	 					$model->updateQuestionary($id,$quest,$desc);

	 						$maxIDQuest=$model->getMaxIDQuest();
							$smarty->assign("maxIDQuest", $maxIDQuest); 

						  	$questionaryInfo=$model->getQuestionary();
							$smarty->assign("questionaryInfo", $questionaryInfo);

							$smarty->display("questionaryIndex.tpl");
	 			}else{

					$editQuestDisplay=$model->displayQuestionaryById($id);
					$smarty->assign("editQuestDisplay",$editQuestDisplay);
					$smarty->display("questionaryDisplay.tpl");

	 			}

 		


?>