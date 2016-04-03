<?php 

    error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("users");

	require ("../_config/database/Connection.php");
	$conn = new Connection();

 	require ("model/usersModel.php");
	 $model = new usersModel($conn->db);

	
//Validation Data
 
	$idUserRole= trim($_POST['idUserRole']);
	$roleName= ucwords(trim($_POST['roleName']));
	$roleDesc= trim($_POST['roleDesc']);	

		if ($_SERVER["REQUEST_METHOD"] == "POST"){

				if (empty($idUserRole)) {
					$IdErr= "**Error** ID is required";
					$error=true;
				}  elseif(!ctype_digit($idUserRole)){
					$IdErr= "**Error** ID has to be a number.";
					$smarty->assign("IdErr",$IdErr);
					$error=true;
				}//end if ID

				if (empty($roleName)) {
					$roleErr= "**Error** A role name is required.";
				 	$smarty->assign("roleErr",$roleErr);
					$error=true;
				}  
				
				if ( empty($roleDesc)) {
					$descripErr= "**Error** A description is  required.";
				 	$smarty->assign("descripErr",$descripErr);
					$error=true;
				}   
	
		}//end if validation
 
	//ADD Prioritization

				if(!$error){ 

	 					$model->updatetUserRole($idUserRole,$roleName,$roleDesc);
	 					$roleName="";
						$roleDesc="";

							$maxID=$model->getMaxIDRole();
							$smarty->assign("maxID", $maxID);

							$roles=$model->getAllRolesUsers();
							$smarty->assign("roles",$roles);

						  	$smarty->display('roleIndex.tpl');
	 			} else{
						 	 $infoRoles=$model->getRoleByID($idUserRole);
						 	 $smarty->assign("infoRoles",$infoRoles);
						
							$smarty->display('updateRole.tpl');
				}


?>