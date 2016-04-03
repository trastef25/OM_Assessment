<?php
   
    error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("prioritization");


	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/prioritizationModel.php");
	$model = new prioritizationModel($conn->db);



  	$id=$_REQUEST['id'];

  	$infoPriobyID= $model->displayInfoPrioritization($id);


  	$smarty->assign("infoPriobyID", $infoPriobyID);

	$smarty->display("prioritizationDisplay.tpl");


?>