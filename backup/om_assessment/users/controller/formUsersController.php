<?php 
 
 	error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("users");

	require ("../_config/database/Connection.php");
	$conn = new Connection();

 	require ("model/usersModel.php");
	$model = new usersModel($conn->db);
 

	$teamsInfo=$model->getTeams();
	$smarty->assign("teamsInfo", $teamsInfo);

	$roles=$model->getAllRolesUsers();
	$smarty->assign("roles",$roles);

	$username="";
	$teamUser="";
	$roleUser="";
	$positionUser="";
	$status="";

		 		$smarty->assign("username",$username);
				$smarty->assign("teamUser",$teamUser);
				$smarty->assign("roleUser",$roleUser);
				$smarty->assign("positionUser",$positionUser );
				$smarty->assign("status",$status); 	


	$smarty->display('addFormUsers.tpl');

?>


