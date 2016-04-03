<?php
    error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("team");


	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/teamModel.php");
	$model = new teamModel($conn->db);

//Validation Data
 
	$teamID =trim($_POST['inputIdTeam']);
	$teamName=trim(ucwords($_POST['inputTeamName']));
	$teamCreationDate =trim(ucwords($_POST['inputTeamCreationDate']));
	$teamLocalization =trim(ucwords($_POST['inputTeamLocalization']));
	$teamRegion =trim(ucwords($_POST['inputTeamRegion']));
	$teamCapability =trim(ucwords($_POST['inputTeamCapability']));
	$teamProcess =trim(ucwords($_POST['inputTeamProcess']));
	$teamFocal =trim(ucwords($_POST['inputTeamFocal']));
	$teamContract =trim(ucwords($_POST['inputTeamContract']));
	$teamClient=trim(ucwords($_POST['inputTeamClient']));
	$teamDM=trim(ucwords($_POST['inputTeamDM']));	
	$teamOEContact=trim(ucwords($_POST['inputTeamOEContact']));

		if ($_SERVER["REQUEST_METHOD"] == "POST"){

				if (empty($teamID)) {
					$IdErr= "**Error** ID is required";
					$smarty->assign("IdErr",$IdErr);
					$error=true;
				}  
 
				if ( empty($teamName)) {
					$TeamNameErr= "**Error** Team name is required.";
				 	$smarty->assign("TeamNameErr",$TeamNameErr);
					$error=true;
				}  

				if ( empty($teamCreationDate)) {
					$DateErr= "**Error** Creation  date is required.";
				 	$smarty->assign("DateErr", $DateErr);
					$error=true;
				}  
				if ( empty($teamLocalization)) {
					$LocalErr= "**Error** Localization is required.";
				 	$smarty->assign("LocalErr",$LocalErr);
					$error=true;
				}  

				if ( empty($teamRegion)) {
					$RegionErr= "**Error** Region is required.";
				 	$smarty->assign("RegionErr",$RegionErr);
					$error=true;
				}  

				if ( empty($teamCapability)) {
					$CapabilityErr= "**Error** A Capability is required.";
				 	$smarty->assign("CapabilityErr",$CapabilityErr);
					$error=true;
				}  

				if ( empty($teamProcess)) {
					 $ProcessErr= "**Error** A Process is required.";
				 	$smarty->assign("ProcessErr", $ProcessErr);
					$error=true;
				}  

				if ( empty($teamFocal)) {
					 $FocalErr= "**Error** Focal contact is required.";
				 	$smarty->assign("FocalErr", $FocalErr);
					$error=true;
				}  

				if ( empty($teamContract)) {
					 $ContractErr= "**Error** A Contract is required.";
				 	$smarty->assign("ContractErr", $ContractErr);
					$error=true;
				}  
				if ( empty($teamClient)) {
					$ClientErr = "**Error** A Client is required.";
				 	$smarty->assign("ClientErr",  $ClientErr );
					$error=true;
				}  
				
				if ( empty($teamDM)) {
					$DMErr  = "**Error** A Director Manager is required.";
				 	$smarty->assign("DMErr",  $DMErr );
					$error=true;
				}  

				if ( empty($teamOEContact)) {
					$OEErr = "**Error** A OE Contact is required.";
				 	$smarty->assign("OEErr",  $OEErr);
					$error=true;
				}  
	  
  
		}//end if validation


				if(!$error){ 

					$model->updateTeam($teamID,$teamName,$teamCreationDate,$teamLocalization,$teamRegion,$teamCapability,
				              $teamProcess,$teamFocal,$teamContract,$teamClient,$teamDM,$teamOEContact);


					$teamsInfo= $model->getTeams();
					$smarty->assign("teamsInfo", $teamsInfo);

					$smarty->display("displayTeamIndex.tpl");

	 			} elseif ($error) {

	 	 
						//Sending Values
						 
						$smarty->assign("teamName",$teamName);
						$smarty->assign("teamCreationDate",$teamCreationDate);
						$smarty->assign("teamLocalization",$teamLocalization);
						$smarty->assign("teamRegion",$teamRegion );
						$smarty->assign("teamCapability",$teamCapability);
						$smarty->assign("teamProcess",$teamProcess);
						$smarty->assign("teamFocal",$teamFocal);								
						$smarty->assign("teamContract",$teamContract);
						$smarty->assign("teamClient",$teamClient);
						$smarty->assign("teamDM",$teamDM);
						$smarty->assign("teamOEContact",$teamOEContact);			
 
					 
							 $teamsInfoByID= $model->getTeamsByID($teamID);
							 $smarty->assign("teamsInfoByID", $teamsInfoByID); 


						$smarty->display("updatedFormTeamViewIndex.tpl");

	 			}





?>