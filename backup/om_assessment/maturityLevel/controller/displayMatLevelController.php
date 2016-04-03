<?php

	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("maturityLevel");


	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/matLevModel.php");
	$model = new matLevModel($conn->db);

//Edit

	$id=$_REQUEST['id'];
	$quest=$_REQUEST['quest'];

	$edit=$model->displayInfoLevel($id);
	 
 	$assessmentType=$model->getAssessmentType();
	$smarty->assign("atype", $assessmentType);
	$smarty->assign("QUEST", $quest);
	
    $smarty->assign("edit",$edit);



//Validation variables
// Null by default,   values change on the file addmatLevelController
	$IdErr= "";
	$smarty->assign("IdErr",$IdErr);
	$questIDErr= "";
	$smarty->assign("questIDErr",$questIDErr);
	$levelErr= "";
	$smarty->assign("levelErr",$levelErr);

	$smarty->display("matLeveldisplay.tpl");

?>