<?php
	error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("questionary");


	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/questionaryModel.php");
	$model = new questionaryModel($conn->db);


	$maxIDQuest=$model->getMaxIDQuest();
	$smarty->assign("maxIDQuest", $maxIDQuest); 

  	$questionaryInfo=$model->getQuestionary();
	$smarty->assign("questionaryInfo", $questionaryInfo); 

		$quest="";
	    $desc="";

        $smarty->assign("quest",$quest);
		$smarty->assign("desc",$desc);
 
	$smarty->display("questionaryIndex.tpl");
?>