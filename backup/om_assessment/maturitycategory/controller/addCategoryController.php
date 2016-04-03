
<?php
    error_reporting(E_PARSE);
	require ("../_config/mvc/confSmarty.php");

	$smarty = new confSmarty();
	$smarty->setModule("maturityCategory");


	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/matCategoryModel.php");
	$model = new matCategoryModel($conn->db);


	// Validation
	$id=trim($_POST['id_cat']);
	$nameCat=ucwords(trim($_POST['cat_name']));
	$questID=$_POST['assessmentType'];
 

		if ($_SERVER["REQUEST_METHOD"] == "POST"){

				if (empty($nameCat)) {
					$categorityErr= "**Error** A category name is required";
					$smarty->assign("categorityErr",$categorityErr);
					$error=true;
				}

		}//end if validation
 
	//ADD Category

				if(!$error){ 
	 			   $addCategory = $model->insertMatCategory($id,$nameCat,$questID);
	 			}
	 
    $category = $model->getMatCategory();
    
	$maxIDCat=$model->getMaxIDCat();
	$smarty->assign("maxIDCat", $maxIDCat);

	$assessmentType=$model->getAssessmentType();
	$smarty->assign("atype", $assessmentType);

	$smarty->assign("CatMat", $category); 
	$smarty->display("matCategoryIndex.tpl");
?>
