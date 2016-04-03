<?php

class questionModel{
  
  function __construct(&$db){ 

    $this->db = $db;

  }

  function getListQuestions(){
    
    $sql = "SELECT question_ID, question.quest_ID,questionary.quest_type as type ,question,question_guide,question_display,maturity_category.mat_cat_name as category,
        maturity_level.mat_lev_name as level,question_weight,question_floor_verif FROM question, questionary, maturity_category ,maturity_level
        WHERE question.mat_cat_ID=maturity_category.mat_cat_ID AND question.mat_cat_ID= maturity_category.mat_cat_ID AND
        question.mat_lev_ID=maturity_level.mat_lev_ID AND question.quest_ID=questionary.quest_ID
        ORDER BY question_display"; 
        /*
      $sql="SELECT question_ID,question,question_guide,question_display,q.mat_cat_ID,
        mat_cat_name,q.mat_lev_ID,mat_lev_name,
    q.quest_ID,question_weight,question_floor_verif
     FROM question as q

     JOIN maturity_category AS m ON m.mat_cat_ID=q.mat_cat_ID
     JOIN maturity_level AS l ON l.mat_lev_ID=q.mat_lev_ID
    
     WHERE q.mat_cat_ID=?
    and q.mat_lev_ID=?
    and q.quest_ID=1?";*/

        $rs = $this->db->Execute($sql);
        
        $data = $rs->getArray();

        return $data;

  }// end getListQuestions

  function getMaxIDQuest(){

    $sql="SELECT MAX(question_ID) FROM question";
    $rs = $this->db->Execute($sql);
    $maxVal=$rs->getArray(); 
    return $maxVal;
  }// end Fx getMaxIDQuest
  

function insertQuestion($question_ID,$quest_ID,$question,$question_guide,$question_display,$mat_cat_ID,$mat_lev_ID, 
           $question_weight,$question_floor_verif){

  $sql="INSERT INTO question(question_ID,quest_ID,question,question_guide,question_display,
                      mat_cat_ID ,mat_lev_ID,question_weight ,question_floor_verif)
               VALUES ('$question_ID','$quest_ID','$question','$question_guide','$question_display','$mat_cat_ID','$mat_lev_ID', 
                     '$question_weight','$question_floor_verif')";
  $rs = $this->db->Execute($sql);
}// end insertQuestion


function getCategory(){

      $sql="SELECT mat_cat_ID, mat_cat_name FROM maturity_category";
      $rs=$this->db->Execute($sql);
      $categories=$rs->getArray();

      return $categories;
}

function getCategoryByQuest($idQ){

      $sql="SELECT mat_cat_ID, mat_cat_name FROM maturity_category  WHERE quest_ID='$idQ'";
      $rs=$this->db->Execute($sql);
      $categories=$rs->getArray();

      return  $categories;
}


function getLevels(){

      $sql="SELECT mat_lev_ID, mat_lev_name FROM maturity_level";
      $rs=$this->db->Execute($sql);
      $level=$rs->getArray();

      return $level;

}
function getLevelsByQuest($idQ){

      $sql="SELECT mat_lev_ID, mat_lev_name FROM maturity_level WHERE quest_ID='$idQ'";
      $rs=$this->db->Execute($sql);
      $level=$rs->getArray();

      return $level;

}

  function getAssessmentType(){
    $sql="SELECT quest_ID, quest_type FROM questionary";
    $rs=$this->db->Execute($sql);
    $assessmentTypeVal=$rs->getArray();
  
    return $assessmentTypeVal;
  }//getAssessmentType


function displayQuestionByID($idQ){

$sql="SELECT question_ID,questionary.quest_type as type ,question,question_guide,question_display,maturity_category.mat_cat_name as category,
        maturity_level.mat_lev_name as level,question_weight,question_floor_verif FROM question, questionary, maturity_category ,maturity_level
        WHERE question.mat_cat_ID=maturity_category.mat_cat_ID AND question.mat_cat_ID= maturity_category.mat_cat_ID AND
        question.mat_lev_ID=maturity_level.mat_lev_ID AND question.quest_ID=questionary.quest_ID AND
        question.question_ID='$idQ'";
    
        $rs=$this->db->Execute($sql);
        $questionDisplay=$rs->getArray();

        return $questionDisplay;

}

function updateQuestion($question_ID,$quest_ID,$question,$question_guide,$question_display,$mat_cat_ID,$mat_lev_ID, 
           $question_weight,$question_floor_verif){

  $sql="UPDATE question   SET quest_ID = '$quest_ID'
                             ,question = '$question'
                             ,question_guide ='$question_guide'
                             ,question_display = '$question_display'
                             ,mat_cat_ID = '$mat_cat_ID'
                             ,mat_lev_ID = '$mat_lev_ID'
                             ,question_weight = '$question_weight'
                             ,question_floor_verif ='$question_floor_verif'
        WHERE question_ID = '$question_ID'";
    $rs = $this->db->Execute($sql);

}













}//end class

?>

