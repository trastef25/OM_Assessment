<?php
    error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("prioritization");


	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/prioritizationModel.php");
	$model = new prioritizationModel($conn->db);

	//===UPDATE=====//

 
	$id=trim($_REQUEST['idprio']);
	$prioName=ucwords(trim($_REQUEST['PrioritizationName']));
	$numDays=trim($_REQUEST['numDays']);

		if ($_SERVER["REQUEST_METHOD"] == "POST"){

				if (empty($id)) {
					$IdErr= "**Error** ID is required";
					$error=true;
				}  elseif(!ctype_digit($id)){
					$IdErr= "**Error** ID has to be a number.";
					$smarty->assign("IdErr",$IdErr);
					$error=true;
				}//end if ID

				if ( empty($prioName)) {
					$prioErr= "**Error** Prioritization name is required.";
				 	$smarty->assign("prioErr",$prioErr);
					$error=true;
				}  
				
				if ( empty($numDays)) {
					$daysIDErr= "**Error** Numbers of days is  required.";
				 	$smarty->assign("daysIDErr",$daysIDErr);
					$error=true;
				}  elseif(!ctype_digit($id)){
					$daysIDErr= "**Error** Numbers of days has to be a number.";
					$smarty->assign("daysIDErr",$daysIDErr);
					$error=true;
				}   elseif($numDays>=100){
					$daysIDErr= "**Error** Numbers of days has to be less than 100 days.";
					$smarty->assign("daysIDErr",$daysIDErr);
					$error=true;
				}
	 


		}//end if validation

		//UPDATE Prioritization


	 		if(!$error){ 

	 				$infoPriobyID= $model->uptadePrioritization($id,$prioName,$numDays);


					  	$smarty->assign("infoPriobyID", $infoPriobyID);

						$maxIDPrio= $model->getMaxIDprioritization();
						$smarty->assign("maxIDPrio", $maxIDPrio);

						$getPrio= $model->getPrioritization();
						$smarty->assign("getPrio", $getPrio);

						$smarty->display("prioritizationIndex.tpl"); 


	 			}


 			if ($error) {
	 				  	  

  					$infoPriobyID= $model->displayInfoPrioritization($id);

				  	$smarty->assign("infoPriobyID", $infoPriobyID);
					$smarty->display("prioritizationDisplay.tpl");
					$error="";

	 			} 


  




?>