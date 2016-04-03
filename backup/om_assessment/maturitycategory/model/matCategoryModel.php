
<?php

class matCategoryModel{

	function __construct(&$db){

		$this->db = $db;

	}// end FX constructor


	function getMatCategory(){

		$sql =  "SELECT mat_cat_ID,mat_cat_name,b.quest_type FROM  maturity_category a, questionary b
  				 WHERE a.quest_ID = b.quest_ID";

	 	$rs = $this->db->Execute($sql);

	    $data = $rs->getArray();

	    return $data;

	}// end Fx getMatCategority

	function insertMatCategory($id,$cat,$questID){

		$sql="INSERT INTO maturity_category (mat_cat_ID,mat_cat_name,quest_ID) VALUES ('$id','$cat','$questID')";
		$rs = $this->db->Execute($sql);

	}

 	function getMaxIDCat(){

		$sql="SELECT MAX(mat_cat_ID) FROM maturity_category";
		$rs = $this->db->Execute($sql);
		$maxVal=$rs->getArray();
	
		// print_r($maxVal); 
		return $maxVal;
	}

	function getAssessmentType(){
		$sql="SELECT quest_ID, quest_type FROM questionary";
		$rs = $this->db->Execute($sql);
		$assessmentTypeVal=$rs->getArray();
	
		return $assessmentTypeVal;
	}//getAssessmentType


function displayInfoCategory($id){
 			 $sql="SELECT mat_cat_ID,mat_cat_name,b.quest_type
 			  FROM  maturity_category a, questionary b
 			  WHERE mat_cat_ID='$id' AND
			  b.quest_ID=a.quest_ID";  
	
		$rs=$this->db->Execute($sql);
     
     	$displayVal= $rs->getArray() ; 
     
        return $displayVal;

	}//displayInfoLevel


	function updateCategory($id,$catName,$quest){

		$sql="UPDATE maturity_category
 			  SET [mat_cat_name] = '$catName',
      			  [quest_ID] = '$quest'
              WHERE mat_cat_ID='$id'";
		$rs = $this->db->Execute($sql);


	}


	

}//end class 

?>