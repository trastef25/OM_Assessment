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

 	 $infoRoles=$model->getRoleByID($id);
 	 $smarty->assign("infoRoles",$infoRoles);
 	 

	$roleName="";
	$roleDesc="";



	$smarty->display('updateRole.tpl');

?>



