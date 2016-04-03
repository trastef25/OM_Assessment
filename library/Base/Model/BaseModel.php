<?php

class Base_Model_BaseModel{

    var $constants;

    function __construct(){
        $this->_init();
    }
    
    function _init(){
        $registry = Zend_Registry::getInstance();
        $this->constants = $registry['constants'];
    }

    // BASE DB functions
 
    public function _openDBConnection(){
    	
    }

    protected function _closeDBConnection(){
    	
    }

    protected function _getDB(){
        return $this->db;
    }

    public function _getDbTable($table) {
        
    }

    public function _getDbRegistry($table, $parameters){
     
        return $registry;
    }

    public function _createDBObject($type){

    }

    public function _storeDBObject($object){

    }

}
?>