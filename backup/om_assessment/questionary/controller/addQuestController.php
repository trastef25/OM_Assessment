
<?php
   // error_reporting(E_PARSE);

    //cleaning variables


    error_reporting(E_PARSE);

	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("questionary");


	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/questionaryModel.php");
	$model = new questionaryModel($conn->db);

  
 	//Validation Data
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
 
	   //ADD QUESTIONARY

				if(!$error){ 

	 				$model->insertQuestionary($id,$quest,$desc);
	 			}

				$maxIDQuest=$model->getMaxIDQuest();
				$smarty->assign("maxIDQuest", $maxIDQuest); 

			  	$questionaryInfo=$model->getQuestionary();
				$smarty->assign("questionaryInfo", $questionaryInfo);

				$smarty->assign("quest",$quest);
				$smarty->assign("desc",$desc);

				$smarty->display("questionaryIndex.tpl");
	 
?>