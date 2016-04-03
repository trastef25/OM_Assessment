<?php

    error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("team");


	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/teamModel.php");
	$model = new teamModel($conn->db);
 
 
    $maxIDTeam=$model->getMaxIDTeam();
	$smarty->assign("maxIDTeam", $maxIDTeam);


	//Valuis from teamAdd just in case validaion requires
 
				$teamName="";
				$teamCreationDate="";
				$teamLocalization="";
				$teamRegion="";
				$teamCapability="";
				$teamProcess="";
				$teamFocal="";
				$teamContract="";
				$teamClient="";
				$teamDM="";
				$teamOEContact="";

 
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

	$smarty->display("view/addFormTeamViewIndex.tpl");
?>