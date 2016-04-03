<?php 
 
 	error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("users");

	require ("../_config/database/Connection.php");
	$conn = new Connection();

 	require ("model/usersModel.php");
	$model = new usersModel($conn->db);
 

//Get Variables

$username=trim($_POST['inputUsername']);	
$teamUser=trim(ucwords($_POST['userTeam']));
$roleUser=trim(ucwords($_POST['inputUserRole']));
$positionUser=trim(ucwords($_POST['inputUserPosition']));
$status=trim(ucwords($_POST['userStatus']));


// validations

if ($_SERVER["REQUEST_METHOD"] == "POST"){
 

				if (empty($username)) {
					$userNameErr= "**Error**  Username is required.";
				 	$smarty->assign("userNameErr",$userNameErr);
					$error=true;
				}  

				if ( empty($teamUser)) {
					$TeamErr= "**Error**  A user team is required.";
				 	$smarty->assign("TeamErr", $TeamErr);
					$error=true;
				}  
				if ( empty($roleUser)) {
					$RoleErr= "**Error**  A user role is required.";
				 	$smarty->assign("RoleErr",$RoleErr);
					$error=true;
				}  

				if ( empty($positionUser)) {
					$PositionErr= "**Error**  A user position is required.";
				 	$smarty->assign("PositionErr",$PositionErr);
					$error=true;
				}  

				if ( empty($status)) {
					$StatusErr= "**Error**  A user status is required.";
				 	$smarty->assign("StatusErr",$StatusErr);
					$error=true;
				}  
		}//end if validation


	//ADD TEAM

				 if(!$error){ 

						$model->insertUser($username,$teamUser,$roleUser,$positionUser,$status);
 
 
			 				$smarty->display("userViewIndex.tpl");

	 		 	} elseif ($error) {
			
			 	$teamsInfo=$model->getTeams();
				$smarty->assign("teamsInfo", $teamsInfo);

				$roles=$model->getAllRolesUsers();
				$smarty->assign("roles",$roles);

				 		//Sending Values
				 		$smarty->assign("username",$username);
						$smarty->assign("teamUser",$teamUser);
						$smarty->assign("roleUser",$roleUser);
						$smarty->assign("positionUser",$positionUser );
						$smarty->assign("status",$status); 		

					$smarty->display('addFormUsers.tpl');
	 			
	        	}


?>


