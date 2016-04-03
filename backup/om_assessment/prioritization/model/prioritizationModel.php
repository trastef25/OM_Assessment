<?php

class prioritizationModel{

	function __construct(&$db){

		$this->db = $db;

	}// end FX constructor


 	function getMaxIDprioritization(){

		$sql="SELECT MAX(prioritization_ID) FROM prioritization";
		$rs = $this->db->Execute($sql);
		$maxVal=$rs->getArray();
	 
		return $maxVal;
	}//getMaxIDprioritization
	
	function getPrioritization(){

		$sql =  "SELECT prioritization_ID, prioritization_name, num_days FROM  prioritization";

	 	$rs = $this->db->Execute($sql);

	    $data = $rs->getArray();

	    return $data;

	}// end Fx getPrioritization

	function insertPrioritization($id,$prioName,$numDays){
		$sql="INSERT INTO prioritization(prioritization_ID,prioritization_name,num_days) VALUES ('$id','$prioName','$numDays')";
		$rs = $this->db->Execute($sql);

	}//insertPrioritization

 

	function displayInfoPrioritization($id){
		$sql="SELECT prioritization_ID,prioritization_name, num_days
 			  FROM   prioritization
 			  WHERE  prioritization_ID='$id'";
	
		$rs=$this->db->Execute($sql);
     
     	$displayVal= $rs->getArray() ; 
     
        return $displayVal;

	}//displayInfoPrioritization


	function uptadePrioritization($id,$prioName,$numDays){

		$sql="UPDATE prioritization
 			  SET [prioritization_name] = '$prioName',
      			  [num_days] = '$numDays'
              WHERE prioritization_ID='$id'";
		$rs = $this->db->Execute($sql);


	}




}//end class 

?>