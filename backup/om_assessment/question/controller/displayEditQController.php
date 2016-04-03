<?php
	
error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("question");


	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/questionModel.php");
	$model = new questionModel($conn->db);

	$id_question=trim($_REQUEST['id']);
	$quest=trim($_REQUEST['quest']);
	$cat=trim($_REQUEST['cat']);
	$lev=trim($_REQUEST['lev']);
	$floor=trim($_REQUEST['floor']);
	 //var_dump($cat);exit;

	// Get es mejor cuando enviamos las variables desde
 
	$displayQuestion=$model->displayQuestionByID($id_question);

	$questType=$model->getAssessmentType();
	$smarty->assign("questType",$questType);

	$category=$model->getCategory(); 
	$levels=$model->getLevels(); 

	$smarty->assign("displayQuestion", $displayQuestion); 
	$smarty->assign("category",$category);
	$smarty->assign("Levels",$levels);
	$smarty->assign("quest",$quest);
	$smarty->assign("cat",$cat);
	$smarty->assign("lev",$lev);  
	$smarty->assign("floor",$floor);  
	$smarty->display("edit_formQuestion.tpl");



?>