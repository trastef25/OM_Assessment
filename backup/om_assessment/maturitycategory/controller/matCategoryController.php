
<?php
    error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("maturityCategory");


	require ("../_config/database/Connection.php");
	$conn = new Connection();


	require ("model/matCategoryModel.php");
	$model = new matCategoryModel($conn->db);

	$maxIDCat=$model->getMaxIDCat();
	$smarty->assign("maxIDCat", $maxIDCat);


 	$category = $model->getMatCategory();

 	$assessmentType=$model->getAssessmentType();
	$smarty->assign("atype", $assessmentType);

 	$smarty->assign("CatMat", $category);

 	$categorityErr= "";
	$smarty->assign("categorityErr",$categorityErr);

	$smarty->display("matCategoryIndex.tpl");
?>