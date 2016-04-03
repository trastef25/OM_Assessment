<?php

//Esta clase me va a permitir la conexion con la libreria de adodb que esta en resorce
class Connection{

  var $db;// esta variable va a tener mi objeto de coneccion

  public function __construct(){ //esta es la forma correcta de generar un constructor en php

    include ("parameters.php");  
    require ("../resources/libs/adodb/adodb.inc.php"); //llamo a mi libreria 

    //$this->db = ADONewConnection("mssql");
    // ADONewConnection No se instancee porque es una clase estatica por lo que no lleva el NEW
   
    //ADONewConnection es la forma de connecion de adbc
    $this->db = ADONewConnection("odbc_mssql");
    $dns = "Driver={SQL Server};Server=$db_host;Database=$db_name";

    $this->db->Connect($dns, $db_user, $db_pwd);
    $this->db->SetFetchMode(ADODB_FETCH_ASSOC);
    //El SetFetchMode(ADODB_FETCH_ASSOC) es una funcion propia de adodb
    //lo que hace es que puedo configurar la manera en que me van a traer los datos de la base
    // si me los despliega como un array asociativo o indexado



    /*===============Este es otro tipo de connection pero no funciono muy bien====*/
    //$this->db->Connect("$dns", $db_user, $db_pwd);
    //$this->db->Execute($db_host, $db_user, $db_pwd,$db_name);
    /*============================================================================*/

  }

}

?>