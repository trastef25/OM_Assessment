<?php
   error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("maturityLevel");


	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/matLevModel.php");
	$model = new matLevModel($conn->db);

	$id=$_POST['idLevel'];
	$LevelName=ucwords(trim($_POST['levelName']));
	$typeA=$_POST['assessmentType'];


 		if ($_SERVER["REQUEST_METHOD"] == "POST"){

				if ( empty($LevelName)) {
					$levelErr= "**Error** Level name is required.";
				 	$smarty->assign("levelErr",$levelErr);
					$error=true;
				}  
				
		}//end if validation
 
	//UPDATE LEVEL

				if(!$error){ 

					   $model->uptadeLevel($id,$LevelName,$typeA);

						$level = $model->getMatLevel();
						$maxIDLev=$model->getMaxIDLev();
						$smarty->assign("maxIDLev", $maxIDLev);

						$assessmentType=$model->getAssessmentType();
						$smarty->assign("atype", $assessmentType);

						$smarty->assign("levelMat", $level);
							 
				   		$smarty->display("matLevelIndex.tpl");	 
	 			}else{


                   $edit=$model->displayInfoLevel($id);
	 
				 	$assessmentType=$model->getAssessmentType();
					$smarty->assign("atype", $assessmentType);
					$smarty->assign("QUEST", $quest);
					
				    $smarty->assign("edit",$edit);


					$smarty->display("matLeveldisplay.tpl");


	 			}
 
 
?>