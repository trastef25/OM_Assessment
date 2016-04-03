<?php 


class teamModel{


 function __construct(&$db){ 

    $this->db = $db;

  }


function getTeams(){

    $sql="SELECT team_ID,team_name,team_localization ,team_region,team_creation_date,team_capability,
                team_process ,team_focal ,team_oe
          FROM  team";
      $rs=$this->db->Execute($sql);
      $data= $rs->getArray();
      return $data;


}// end Fx getTeams


function getTeamsByID($ID){


      $sql="SELECT team_ID,team_name ,team_localization,team_region,team_creation_date,team_capability,
                   team_process,team_focal ,team_contract,team_client,team_dm,team_oe
              FROM team
              WHERE  team_ID='$ID'";
      $rs=$this->db->Execute($sql);
      $data= $rs->getArray();
      return $data;

}// end getTeamsByID

  function insertTeam($teamID,$teamName,$teamCreationDate,$teamLocalization,$teamRegion,$teamCapability,
  						$teamProcess,$teamFocal,$teamContract,$teamClient,$teamDM,$teamOEContact){
    
    $sql = "INSERT INTO team (team_ID,team_name,team_localization,team_region,
                        team_creation_date,team_capability,team_process,team_focal,
                        team_contract,team_client,team_dm,team_oe)
                 VALUES
                       ('$teamID','$teamName','$teamLocalization','$teamRegion',
                        '$teamCreationDate'  ,'$teamCapability'  ,'$teamProcess',
                        '$teamFocal' ,'$teamContract','$teamClient','$teamDM',
                        '$teamOEContact')";
     
            $this->db->Execute($sql);
     

  }// end getListQuestions

 

 
function updateTeam($teamID,$teamName,$teamCreationDate,$teamLocalization,$teamRegion,$teamCapability,
              $teamProcess,$teamFocal,$teamContract,$teamClient,$teamDM,$teamOEContact){

    $sql="UPDATE team 
             SET team_name ='$teamName'
                ,team_localization = '$teamLocalization'
                ,team_region = '$teamRegion'
                ,team_creation_date = '$teamCreationDate'
                ,team_capability = '$teamCapability'
                ,team_process =  '$teamProcess'
                ,team_focal ='$teamFocal'
                ,team_contract = '$teamContract'
                ,team_client = '$teamClient'
                ,team_dm = '$teamDM'
                ,team_oe = '$teamOEContact'
           WHERE team_ID='$teamID'";
    $this->db->Execute($sql);

}// end Fx updateTeam



  function getMaxIDTeam(){

    $sql="SELECT MAX(team_ID) FROM team";
    $rs = $this->db->Execute($sql);
    $maxVal=$rs->getArray();
  
    return $maxVal;

  }// end Fx getMaxIDTeam
  





















}//end class teamModel



 ?>

