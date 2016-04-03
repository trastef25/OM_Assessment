
<?php
    error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("question");


	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/questionModel.php");
	$model = new questionModel($conn->db);
	
	$maxIDQues=$model->getMaxIDQuest();
	$smarty->assign("maxIDQues", $maxIDQues);

	$levels=$model->getLevels();
	$smarty->assign("levels",$levels);

 
	$categories=$model->getCategory();
	$smarty->assign("categories",$categories);

	$assessmentType=$model->getAssessmentType();
	$smarty->assign("atype", $assessmentType);


	$question= "";
	$guideline= "";
	$DisplayOrder= "";
	$matCat="";
	$matLev="";
	$Weight="";
	$floorVerif=""; 
			$smarty->assign("ques",$question);
			$smarty->assign("guide",$guideline);
			$smarty->assign("display",$DisplayOrder);
			$smarty->assign("weight",$Weight);
			$smarty->assign("lev",$matLev);
			$smarty->assign("cat",$matCat);								
			$smarty->assign("floor",$floorVerif);

	$smarty->display("addformQuestion.tpl");
 

?>
						 