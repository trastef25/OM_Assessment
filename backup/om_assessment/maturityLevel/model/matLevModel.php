
<?php

class matLevModel{

	function __construct(&$db){

		$this->db = $db;

	}// end FX constructor


	function getMatLevel(){

		$sql =  "SELECT mat_lev_ID,mat_lev_name,b.quest_type FROM  maturity_level a, questionary b
  				 WHERE a.quest_ID = b.quest_ID";

	 	$rs = $this->db->Execute($sql);

	    $data = $rs->getArray();

	    return $data;

	}// end Fx getmatLev

	function insertLevel($id,$level,$questID){
		$sql="INSERT INTO maturity_level(mat_lev_ID,mat_lev_name,quest_ID) VALUES ('$id','$level','$questID')";
		$rs = $this->db->Execute($sql);

	}//insertLevel

 	function getMaxIDLev(){

		$sql="SELECT MAX(mat_lev_ID) FROM maturity_level";
		$rs = $this->db->Execute($sql);
		$maxVal=$rs->getArray();
	
		return $maxVal;
	}//getMaxIDLev
	
	function getAssessmentType(){
		$sql="SELECT quest_ID, quest_type FROM questionary";
		$rs = $this->db->Execute($sql);
		$assessmentTypeVal=$rs->getArray();
	
		return $assessmentTypeVal;
	}//getAssessmentType

	function displayInfoLevel($id){
		$sql="SELECT mat_lev_ID,mat_lev_name,b.quest_type
 			  FROM  maturity_level a, questionary b
 			  WHERE mat_lev_ID='$id' AND
 			  b.quest_ID=a.quest_ID";
	
		$rs=$this->db->Execute($sql);
     
     	$displayVal= $rs->getArray() ; 
     
        return $displayVal;

	}//displayInfoLevel


	function uptadeLevel($id,$levelName,$quest){

		$sql="UPDATE maturity_level
 			  SET [mat_lev_name] = '$levelName',
      			  [quest_ID] = '$quest'
              WHERE mat_lev_ID='$id'";
		$rs = $this->db->Execute($sql);


	}




}//end class 

?>