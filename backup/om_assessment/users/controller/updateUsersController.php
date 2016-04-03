<?php 
 
 error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("users");

	require ("../_config/database/Connection.php");
	$conn = new Connection();

 	require ("model/usersModel.php");
	$model = new usersModel($conn->db);

	$id=trim($_GET['id']);
 	$team=trim($_GET['team']);
	$role=trim($_GET['role']); 
	$status=trim($_GET['status']); 

   $teamsInfo=$model->getTeams(); 	
   $smarty->assign("teamsInfo",$teamsInfo);

   $roles=$model->getAllRolesUsers(); 	
   $smarty->assign("roles",$roles);
 

   $userUpdate= $model->getUserById($id);
   $smarty->assign("userUpdate",$userUpdate);


   $smarty->assign("team",$team);
   $smarty->assign("role",$role);
   $smarty->assign("status",$status);



   $smarty->display("updateFormUsers.tpl");
?>