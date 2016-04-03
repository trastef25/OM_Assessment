
<?php
    error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("maturityCategory");

	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/matCategoryModel.php");
	$model = new matCategoryModel($conn->db);

	$id=$_REQUEST['idcat'];
	$catName=trim(ucwords($_REQUEST['cat_name']));
	$ques=$_REQUEST['assessmentType'];

     if ($_SERVER["REQUEST_METHOD"] == "POST"){

				if (empty($catName)) {
					$categorityErr= "**Error** A category name is required";
					$smarty->assign("categorityErr",$categorityErr);
					$error=true;
				}

		}//end if validation
 
	//ADD Category

				if(!$error){ 
	 			
					$model->updateCategory($id,$catName,$ques);

				    $category = $model->getMatCategory();
				    $smarty->assign("CatMat", $category); 

					$maxIDCat=$model->getMaxIDCat();
					$smarty->assign("maxIDCat", $maxIDCat);

					$assessmentType=$model->getAssessmentType();
					$smarty->assign("atype", $assessmentType);

					$smarty->display("matCategoryIndex.tpl");

	 			}else{
				 	$editCategory = $model-> displayInfoCategory($id);

				 	$assessmentType=$model->getAssessmentType();
					$smarty->assign("atype", $assessmentType);

				 	$smarty->assign("QUEST", $quest);
				 	$smarty->assign("displayCatMat", $editCategory);
					$smarty->display("displayMatCategory.tpl");
 			}
	 











?>