<?php

	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("maturityCategory");


	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/teamModel.php");
	$model = new teamModel($conn->db);
 
	 

 


  
 

 	 
	$smarty->display("view/teamViewIndex.tpl");
?>