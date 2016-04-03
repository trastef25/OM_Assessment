
<?php
    error_reporting(E_PARSE);

    //cleaning variables
	$id=null;
	$level=null;
	$questID=null;


	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("maturityLevel");


	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/matLevModel.php");
	$model = new matLevModel($conn->db);

  
 	//Validation Data
	$id=$_POST['idLevel'];
	$level=trim(ucwords($_POST['levelName']));
	$questID=$_POST['assessmentType'];
 
		if ($_SERVER["REQUEST_METHOD"] == "POST"){

				if (empty($id)) {
					$IdErr= "**Error** ID is required";
					$error=true;
				}  elseif(!ctype_digit($id)){
					$IdErr= "**Error** ID has to be a number.";
					$smarty->assign("IdErr",$IdErr);
					$error=true;
				}//end if ID

				if ( empty($level)) {
					$levelErr= "**Error** Level name is required.";
				 	$smarty->assign("levelErr",$levelErr);
					$error=true;
				}  
				
				if ( empty($questID)) {
					$questIDErr= "**Error** Assessment type  value is required.";
				 	$smarty->assign("questIDErr",$questIDErr);
					$error=true;
				}  
	 


		}//end if validation
 
	//ADD LEVEL

				if(!$error){ 

	 				$model->insertLevel($id,$level,$questID);
	 			}

		
	$level = $model->getMatLevel();

	$maxIDLev=$model->getMaxIDLev();
	$smarty->assign("maxIDLev", $maxIDLev);

	$assessmentType=$model->getAssessmentType();
	$smarty->assign("atype", $assessmentType);


	$smarty->assign("levelMat", $level);
	$smarty->display("matLevelIndex.tpl"); 
?>