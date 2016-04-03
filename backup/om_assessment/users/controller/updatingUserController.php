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

$username=$_POST['inputUsername'];	
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
		
				if (empty($positionUser)) {
					$PositionErr= "**Error**  A user position is required.";
				 	$smarty->assign("PositionErr",$PositionErr);
					$error=true;
				}  

		}//end if validation

	//UPDATE USER

				 if(!$error){ 

						$model->updateUser($username,$teamUser,$roleUser,$positionUser,$status);
						 
						 	$Users= $model->getUsers();
							$smarty->assign("Users", $Users); 
 
			 				$smarty->display("displayUsersIndex.tpl");

	 		 	} elseif ($error) {
			
					 	$teamsInfo=$model->getTeams();
						$smarty->assign("teamsInfo", $teamsInfo);

						$roles=$model->getAllRolesUsers();
						$smarty->assign("roles",$roles);

                        $userUpdate= $model->getUserById($username);
	  				    $smarty->assign("userUpdate",$userUpdate);
	

					$smarty->display('updateFormUsers.tpl');
	 			
	        	}


 

 ?>