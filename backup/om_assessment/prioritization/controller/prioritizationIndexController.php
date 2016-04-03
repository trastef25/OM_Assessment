<?php
    error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("prioritization");


	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/prioritizationModel.php");
	$model = new prioritizationModel($conn->db);


	$maxIDPrio= $model->getMaxIDprioritization();
	$smarty->assign("maxIDPrio", $maxIDPrio);

	$getPrio= $model->getPrioritization();
	$smarty->assign("getPrio", $getPrio);



	$smarty->display("prioritizationIndex.tpl");



?>