<?php 
 
 //	error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("users");

	require ("../_config/database/Connection.php");
	$conn = new Connection();

 	require ("model/usersModel.php");
	$model = new usersModel($conn->db);
  
	$Users= $model->getUsers();
	$smarty->assign("Users", $Users); 

   $smarty->display("displayUsersIndex.tpl");
?>