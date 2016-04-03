<?php 

    error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("users");

	require ("../_config/database/Connection.php");
	$conn = new Connection();

 	require ("model/usersModel.php");
	 $model = new usersModel($conn->db);

	$maxID=$model->getMaxIDRole();
	$smarty->assign("maxID", $maxID);

	$roles=$model->getAllRolesUsers();
	$smarty->assign("roles",$roles);


	$roleName="";
	$roleDesc="";

     $smarty->assign("rolename",$rolename);
	 $smarty->assign("roledescription",$roleDesc);

	$smarty->display('roleIndex.tpl');

?>



