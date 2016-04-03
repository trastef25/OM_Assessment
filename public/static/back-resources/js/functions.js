function loadPage(idPage) {

	if (idPage == "assessment") {	

		$("#mainContent").load("../"+idPage+"/selector.php", function(){

		});

	}

	if (idPage == "maturityLevel") {	

		$("#mainContent").load("../"+idPage+"/index.php", function(){

		});
	}

}//end fx loadPage

function loadAssessment(){

	var optionSelected = $("#selectorOpt").val();

	$("#mainContent").load("../assessment/index.php", {optionSelected:optionSelected}, function(){

	});
	

}

function addLevel(){

	alert("entré");

	$("#mainContent").load("..maturityLevel/addMaturityLevel.php", function(){});
 

}
 /*
 function getChangeEvent(x, y){

console.log(x, y);
 	 

 	 if(document.getElementById('1'){
 	 	console.log("cambie1" );
 	 }
 	    
 	    console.log("cambie" );
		var myResult = new Array(cambie1);







 }// end getChangeEvent()
 */
 $('#basicModal').modal(options);