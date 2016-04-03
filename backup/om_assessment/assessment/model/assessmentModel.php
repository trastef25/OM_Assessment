<?php


class assessmentModel{

	function __construct(&$db){

		$this->db=$db;

	}// end Fx construct 

	function getQuestions($idQuest){
		
		$sql = "SELECT  q.quest_ID, q.question_ID,q.question,q.question_display,mc.mat_cat_name as category,
						ml.mat_lev_name as level,question_floor_verif 
				FROM    question q , maturity_category mc ,maturity_level ml
				WHERE   q.mat_cat_ID= mc.mat_cat_ID AND
						q.mat_lev_ID=ml.mat_lev_ID AND
					/*	q.question_ID=1 AND --TMG Borrar*/
						q.quest_ID='$idQuest'
		        ORDER BY question_display ";

        $rs = $this->db->Execute($sql); 

        $data = $rs->getArray(); 
   
 		 return $data;

	}//end Fx getQuestions


 function getOptXquestions($array){ //pasar el arreglo que continene las preguntas
	$answ_array= array();
	$Preguntas_array= array();
	$Preguntas_Respuestas_array= array();

  	foreach ($array as $question) {
 		 	
 		 $var1 = $question['quest_ID'];
 		 $var2 = $question['question_ID'];

	    	 $sql=" SELECT mc.mat_cat_name, ml.mat_lev_name ,o.question_ID,o.options 
			 FROM   question q, maturity_category mc, maturity_level ml	,optionResult  o
			 WHERE o.question_ID = '$var2'
			 AND o.question_ID=q.question_ID
			 AND o.quest_ID=q.quest_ID
			 AND q.mat_cat_ID = mc.mat_cat_ID
			 AND q.mat_lev_ID = ml.mat_lev_ID
			 ORDER BY options desc";	


			$rs= $this->db->Execute($sql);
			$arr1=$rs->getArray();
			
			$Preguntas_Respuestas_array[]=$question;
		    $Preguntas_Respuestas_array[]=$arr1;

	$Preguntas_array="";
	
	 $answ_array[]= $Preguntas_Respuestas_array;
	 $Preguntas_Respuestas_array="";
  
 	}
 // 	echo "<pre>";
 //	print_r($answ_array); 
// 	echo "</pre>"; 
 
	 return $answ_array; 
 }

 function getTotalQuestions(){
 	
 			$sql="SELECT * FROM question";
 			$rs= $this->db->Execute($sql);
			$data=$arrTest = $rs->GetRows();
			return count($arrTest);
  }

function getCatLevbyQuestion($idQuestion){

		$sql="SELECT mat_cat_name, mat_lev_name FROM question q,maturity_category mc, maturity_level ml
			  WHERE question_ID = '$idQuestion'    AND
					  q.mat_cat_ID = mc.mat_cat_ID AND
					  q.mat_lev_ID = ml.mat_lev_ID";
		$rs=$this->db->Execute($sql);
		$data=$rs->getArray();

		return $data;
}

function getAllTeams(){

			$sql="SELECT team_ID, team_name  FROM team Order By team_name";

			$rs= $this->db->Execute($sql);
			$data=$rs->getArray();

			return $data;

	}// end Fx getAllTeams

function getAllTeamsbyID($ID){
			
			$sql="SELECT team_ID, team_name  FROM team WHERE team_ID='$ID'";
			$rs= $this->db->Execute($sql);
			$data=$rs->getArray();
			return $data;

	}

function getAllQuestionaryType(){

			$sql="SELECT quest_ID,quest_type FROM questionary";

			$rs= $this->db->Execute($sql);
			$data=$rs->getArray();

			return $data;

}// end Fx getAllQuestionaryType  

function  questionaryById($idQuest){

			$sql="SELECT quest_type FROM questionary WHERE  quest_ID='$idQuest'";
			$rs= $this->db->Execute($sql);
			$data=$rs->getArray();
			return $data;
}// end Fx getAllQuestionaryType

function getMatCategory($idQuest){

		$sql =  "SELECT mat_cat_ID,mat_cat_name,b.quest_type FROM  maturity_category a, questionary b
  				 WHERE a.quest_ID =b.quest_ID AND
					a.quest_ID='$idQuest'";

	 	$rs = $this->db->Execute($sql);

	    $data = $rs->getArray();

	    return $data;

}// end Fx getMatCategority





function getAllCat($idQuest){

		$sql="select MC.mat_cat_name
from maturity_category as MC, 
     question as Q, questionary as QU
where QU.quest_ID = Q.quest_ID
AND MC.mat_cat_ID = Q.mat_cat_ID
AND QU.quest_ID = '$idQuest'
group by MC.mat_cat_name";

	 	$rs = $this->db->Execute($sql);

	    $data = $rs->getArray();

	    $listCategories = array();
	    foreach ($data as $cat) {
	    	array_push($listCategories, $cat["mat_cat_name"]);
	    }

	    return $listCategories;

}




}// end class




?>