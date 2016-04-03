<?php
class Application_Model_UserModel extends Base_Model_BaseModel{

	 public function init(){
    	parent::init();
    }

    public function login($user, $password){

        return true;
    }

    public function logout(){
        session_unset();
        session_destroy();
    }

}
?>