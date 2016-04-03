<?php
	//este controlador va a llamar a la vista que queremos pero usando smarty

	require ("../_config/mvc/confSmarty.php");//el control simpre va a llamar la configuracion de smarty
	//Ahora como ya lo tengo invocado construyo un objeto con new y llamamos al constructor
	$smarty = new confSmarty();//cada vez que incluyo una clase la tengo q instancear
	//como ya lo puedo usar llamo a las funciones de esa clase y asi utilice las vistas de este modulo  las compiladas
	$smarty->setModule("dashboard");//con smarty siempre le tenemos que pasar el modulo en que estamos


	//esta otra parte esta llmando a la coneccion de la base de datos porq necesitamos hacer conusltas.
	require ("../_config/database/Connection.php");
	$conn = new Connection();

	require ("model/dashboardModel.php");// llamo el modelo 
	$model = new dashboardModel($conn->db); // y le envio el archivo de connecion

	$preguntas = $model->getListQuestions(); //llamo a la funcion a utilizar y esta me devele unobjeto
	/* truco del profe para acomodar el arreglo para visualizarlo mejor
	echo "<pre>";
	print_r($preguntas);
	echo "</pre>";
	exit;
	*/
	$smarty->assign("LISTA_PREGUNTAS", $preguntas); // esta es la forma de pasar datos a la vista con smarty le
	//digo que le voy a hacer un assign de los datos que quiero pasarle
	//el arreglo lo envio y le defino un nombre que en este caso va a ser LISTA_PREGUNTAS e la variable con que yo le voy a pasar las cosas
	//cpn smarty llamamos a la vista de la siguiente manera
	$smarty->display("dashboardIndex.tpl"); //la vista no va a ser .html sino .tpl que es el compitlado de smarty
?>