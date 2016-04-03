<?php
 

	require ("../_config/mvc/confSmarty.php");
	$smarty = new confSmarty();
	$smarty->setModule("help");

	//require ("../_config/database/Connection.php");
	//$conn = new Connection();


	$smarty->display("helpIndex.tpl"); 
?>