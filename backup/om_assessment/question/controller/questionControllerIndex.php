<?php
	

	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("question");


	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/questionModel.php");
	$model = new questionModel($conn->db);

   
	$smarty->display("questionViewIndex.tpl");  

?>