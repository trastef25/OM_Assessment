<?php

	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("team");


	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/teamModel.php");
	$model = new teamModel($conn->db);


	$teamsInfo= $model->getTeams();
	$smarty->assign("teamsInfo", $teamsInfo);

	$smarty->display("displayTeamIndex.tpl");


	?>