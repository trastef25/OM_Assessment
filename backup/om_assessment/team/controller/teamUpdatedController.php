
<?php
    error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("team");


	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/teamModel.php");
	$model = new teamModel($conn->db);


	$ID= $_GET['id'];

	$teamsInfoByID= $model->getTeamsByID($ID);
	$smarty->assign("teamsInfoByID", $teamsInfoByID);


	$smarty->display("updatedFormTeamViewIndex.tpl");















	


	?>


