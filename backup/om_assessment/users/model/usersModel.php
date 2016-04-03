<?php 


class usersModel{

 function __construct(&$db){ 

    $this->db = $db;

  }

//===========ROLES QUERIES=================//

function insertUserRole($idUserRole,$roleName,$roleDesc){

 $sql="INSERT INTO  user_role (role_ID,role_name,role_desc)
       VALUES
           ('$idUserRole','$roleName','$roleDesc')";
	   $this->db->Execute($sql);

}//end insertUserRole



function getAllRolesUsers(){

	$sql="SELECT role_ID, role_name,role_desc
          FROM   user_role";
  
    $rs=$this->db->Execute($sql);
    $data= $rs->getArray();
    
      return $data;

}// end getAllRolesUsers
 

function getMaxIDRole(){

		$sql="SELECT MAX(role_ID) FROM user_role";
		$rs = $this->db->Execute($sql);
		$maxVal=$rs->getArray();
	
		return $maxVal;
	}//getMaxIDLev

function getRoleByID($idUserRole){

  $sql="SELECT role_ID, role_name,role_desc
          FROM   user_role
          WHERE  role_ID= '$idUserRole'";

  
    $rs=$this->db->Execute($sql);
    $data= $rs->getArray();
    
      return $data;

}// end getAllRolesUsers

function updatetUserRole($idUserRole,$roleName,$roleDesc){

 $sql="UPDATE [dbo].[user_role]
       SET    role_name= '$roleName',
              role_desc= '$roleDesc'
      WHERE   role_ID= '$idUserRole'";
     $this->db->Execute($sql);

}//end updatetUserRole



//===========USERS  QUERIES=================//


 
function getTeams(){

    $sql="SELECT team_name 
          FROM   team";
      $rs=$this->db->Execute($sql);
      $data= $rs->getArray();
      return $data;


}// end Fx getTeams

function insertUser($username,$teamUser,$roleUser,$positionUser,$status){
	$sql="INSERT INTO [dbo].[user]
           ([users_name]
           ,[user_team]
           ,[role_ID]
           ,[user_position]
           ,[user_status])
     VALUES
           ('$username'
           ,'$teamUser'
           ,'$roleUser'
           ,'$positionUser'
           ,'$status')";
	   
	        $this->db->Execute($sql);
}

function getUsers(){
        
        $sql="SELECT a.users_name, a.user_team, b.role_name, user_position,a.user_status
              FROM [dbo].[user] a, [dbo].[user_role] b
              WHERE b.role_ID=a.role_ID";
      $rs=$this->db->Execute($sql);
      $data= $rs->getArray();
      return $data; 
}

function updateUser($username, $userTeam, $userRole, $userPosition, $userStatus){


      $sql="UPDATE [dbo].[user]
            SET    users_name = '$username',
                   user_team = '$userTeam',
                   role_ID = '$userRole',
                   user_position = '$userPosition',
                   user_status = '$userStatus'
           WHERE   users_name='$username'";
                   $this->db->Execute($sql);

}
 function getUserById($id){
        
        $sql="SELECT users_name, user_team, role_ID, user_position,user_status
              FROM [dbo].[user]
              where users_name='$id'";
      $rs=$this->db->Execute($sql);
      $data= $rs->getArray();
      return $data;

} 


}//end class


 ?>