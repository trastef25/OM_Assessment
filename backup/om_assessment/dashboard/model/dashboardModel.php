<?php

class dashboardModel{
	
	function __construct(&$db){ // el amperson es para llamar la variable por referencia
									// y evitar que este pierda la estructura estoy llamando al
								// constructor de la coneccition.php
		$this->db = $db;

	}

	function getListQuestions(){
		
		$sql = "SELECT question_ID,questionary.quest_type as type ,question,question_guide,question_display,maturity_category.mat_cat_name as category,
        maturity_level.mat_lev_name as level,question_weight,question_floor_verif FROM question, questionary, maturity_category ,maturity_level
        WHERE question.mat_cat_ID=1 AND question.mat_cat_ID= maturity_category.mat_cat_ID AND
        question.mat_lev_ID=maturity_level.mat_lev_ID AND question.quest_ID=questionary.quest_ID
        ORDER BY question_display";

        $rs = $this->db->Execute($sql);// en esta sentencia decimos a la coneccion con bd que ejecute el query
        //cuando se ejecuta el query devuelve un result set a este resulset lo voy a coocar en un arreglo

        $data = $rs->getArray();// lo que me devuelve el querlo meto en un aray

        return $data;

	}

}

?>