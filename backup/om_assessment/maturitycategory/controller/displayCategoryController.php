<?php
    error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("maturityCategory");


	require ("../_config/database/Connection.php");
	$conn = new Connection();


	require ("model/matCategoryModel.php");
	$model = new matCategoryModel($conn->db);
	 
	$id=$_REQUEST['id'];
	$quest=$_REQUEST['quest'];
		 
 	$editCategory = $model-> displayInfoCategory($id);

 	$assessmentType=$model->getAssessmentType();
	$smarty->assign("atype", $assessmentType);

 	$smarty->assign("QUEST", $quest);
 	$smarty->assign("displayCatMat", $editCategory);
	$smarty->display("displayMatCategory.tpl");
?>