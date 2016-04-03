
 function  getVal(idCuestionario,  idQuestion, cat, level, valSelected){
  
	  $("#boxResults").load("addAssessment.php", { idCuestionario: idCuestionario, idQ:idQuestion, catQ: cat, levelQ:level, valQ:valSelected}, function(){
	  		
	  });

 
  }



 