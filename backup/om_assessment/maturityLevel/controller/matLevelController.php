
<?php

	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("maturityLevel");


	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/matLevModel.php");
	$model = new matLevModel($conn->db);

	 
	$level = $model->getMatLevel();
	
	$maxIDLev=$model->getMaxIDLev();
	$smarty->assign("maxIDLev", $maxIDLev);

	$assessmentType=$model->getAssessmentType();
	$smarty->assign("atype", $assessmentType);

	$smarty->assign("levelMat", $level);

	//Validation variables
	// Null by default,   values change on the file addmatLevelController
	$IdErr= "";
	$smarty->assign("IdErr",$IdErr);
	$questIDErr= "";
	$smarty->assign("questIDErr",$questIDErr);
	$levelErr= "";
	$smarty->assign("levelErr",$levelErr);


	$smarty->display("matLevelIndex.tpl");
?>