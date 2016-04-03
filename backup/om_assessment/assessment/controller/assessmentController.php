<?php

require("../_config/mvc/confsmarty.php");
$smarty = new confsmarty();
$smarty->setModule("assessment");

require("../_config/database/Connection.php");
$conn = new Connection(); 

require("model/assessmentModel.php");
$model = new assessmentModel($conn->db);

$getQuestionaryType = $model->getAllQuestionaryType();
$smarty->assign("getQuesType",$getQuestionaryType);

$teams= $model->getAllTeams();
$smarty->assign("teams",$teams); 

$smarty->display("selectNewAssessment.tpl");

?>