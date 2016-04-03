<?php
	error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("questionary");


	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/questionaryModel.php");
	$model = new questionaryModel($conn->db);

//Edit

$id=$_REQUEST['id'];

$editQuestDisplay=$model->displayQuestionaryById($id);
$smarty->assign("editQuestDisplay",$editQuestDisplay);



//Validation variables
// Null by default,   values change on the file addmatLevelController
$IdErr= "";
$smarty->assign("IdErr",$IdErr);
$questIDErr= "";
$smarty->assign("questIDErr",$questIDErr);
$levelErr= "";
$smarty->assign("levelErr",$levelErr);

$smarty->display("questionaryDisplay.tpl");

?>