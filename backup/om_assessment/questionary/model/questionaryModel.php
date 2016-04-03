
<?php

class questionaryModel{

	function __construct(&$db){

		$this->db = $db;

	}// end FX constructor

 	function getMaxIDQuest(){

		$sql="SELECT MAX(quest_ID) FROM questionary";
		$rs = $this->db->Execute($sql);
		$maxVal=$rs->getArray();
	
		return $maxVal;
	}//getMaxIDQuest
	
	function getQuestionary(){

		$sql =  "SELECT  quest_ID, quest_type, quest_desc  FROM  questionary";

	 	$rs = $this->db->Execute($sql);

	    $data = $rs->getArray();

	    return $data;

	}// end Fx getQuestionary

	function insertQuestionary($id,$questType,$description){
		$sql="INSERT INTO questionary(quest_ID, quest_type, quest_desc) VALUES ('$id','$questType','$description')";
		$rs = $this->db->Execute($sql);

	}//insertQuestionary


 	function displayQuestionaryById($id){
		$sql="SELECT  quest_ID , quest_type, quest_desc 
			  FROM  questionary 
			  WHERE quest_ID='$id'";
	
		$rs=$this->db->Execute($sql);
     
     	$displayVal= $rs->getArray() ; 
     
        return $displayVal;

	}//displayQuestionaryById


	function updateQuestionary($id,$questType,$description){

		$sql="UPDATE questionary
 			  SET quest_type = '$questType',
      			  quest_desc = '$description'
              WHERE quest_ID ='$id'";
		$rs = $this->db->Execute($sql);


	}// end uptadeLevel




}//end class 

?>