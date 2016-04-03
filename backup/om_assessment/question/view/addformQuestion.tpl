<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/favicon/favicon.ico">


    <title>Checkpoint Website</title>

     <link href="../resources/css/reset.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
     <link href="../resources/css/bootstrap.css" rel="stylesheet">

    <!-- -- styles --  -->
     <link href="../resources/css/main.css" rel="stylesheet">
     <link href="../resources/css/myStyle.css" rel="stylesheet">
   
    <!-- -- jquery Scripts --  -->
      <script src="//code.jquery.com/jquery-1.9.1.js"></script>
      <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <!-- -- scripts --  -->
      <script src="../resources/js/functions.js"></script>

    <!--Condicionals -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

   <div class="container">

          <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Checkpoint  </a>
                  <a> Welcome t.mcfarlane </a>
                </div>
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="../help">Instruccions</a></li>
                    <li><a href="../ ">Logout</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                  <li class="active"><a href="#">Overview</a></li>
                  <li><a href="../dashboard">Dashboard</a></li>
                  <li><a>Accion Plans</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                  <li class="active"><a>OM tools</a></li>
                  <li><a href="../assessment/index.php">Assessments</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                  <li class="active"><a>Maintenance</a></li>
                  <li><a href="../question">Questions</a></li>
                  <li><a href="../questionary">Questionaries</a></li>
                  <li><a href="../maturityLevel">Levels</a></li>
                  <li><a href="../maturityCategory">Categories</a></li>
                  <li><a href="../users">Users</a></li>
                  <li><a href="../team">Teams</a></li>
                  <li><a href="../prioritization">Prioritization</a></li>
                </ul>
              </div>
          </div>


     <div class="container-fluid"> 
     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
     <div id="mainContent"> 
        
          <div class="col-md-12 column ui-sortable">
            <div class="box box-element ui-draggable" style="display: block;">
 

                <div class="view">
                  <div class="page-header">
                  <h1 contenteditable="true">Question section <small>Create a new question</small></h1>
                  </div>
                </div><!-- end view-->

              <div class="preview">Please fill up the next require information:</div>
              <br>

              
              <div class="view">

                <?php require("question/controller/addQuestionController.php");?>
                <form class="form-horizontal" role="form"  action="addQuestionIndex.php" method="POST">
               
                  <div class="form-group">
                    <label for="lbl_IDquestion" class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-3">
                        {foreach from=$maxIDQues item=maxID } 
                        {$id=$maxID[question_ID]+1}
                        <input  type="text" class="form-control"  name="id_question" value="{$id}"  required="required" readonly> 
                        {/foreach}
                    </div>
                  </div>

                  <div class="form-group">
                     <label for="lblAssessmentType" class="col-sm-2 control-label">Assessment Type</label>
                      <div class="col-sm-5">
                         <select class="form-control"  name="assessmentType">
                          {section name=at loop=$atype} 
                          {if $atype[at].quest_ID==$qtype}
                           <option value="{$atype[at].quest_ID}" selected>{$atype[at].quest_type}</option>
                          {else}
                          <option value="{$atype[at].quest_ID}">{$atype[at].quest_type}</option>
                          {/if}
                          {/section}
                         </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="lblQuestion" class="col-sm-2 control-label">Question:</label>
                    <div class="col-sm-5">
                      <textarea name="question"  class="form-control"rows="3" cols="40">{$ques}</textarea>
                      <span class="error">{$questionErr}</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="lblGuideline" class="col-sm-2 control-label">Guideline:</label>
                    <div class="col-sm-5">
                     <textarea name="guideline" class="form-control"  rows="5" cols="40">{$guide}</textarea>
                     <span class="error">{$guideErr}</span>
                    </div>
                  </div>

                <div class="form-group">
                  <label for="lbldisplay" class="col-sm-2 control-label">Display Order:</label>
                  <div class="col-sm-5">
                   <input type="text"  class="form-control" type="number" min="1" name="DisplayOrder" value="{$display}">
                   <span class="error">{$displayErr}</span> 
                  </div>
                </div>

               <div class="form-group">
                 <label for="lblinputTeamCapability" class="col-sm-2 control-label">Category:</label>
                 <div class="col-sm-5">
                  <select  class="form-control" name="matCat">
                    {section name=cat loop=$categories}
                    {if $categories[cat].mat_cat_ID==$cat}
                    <option value="{$categories[cat].mat_cat_ID}" selected >{$categories[cat].mat_cat_name} </option>
                    {else}
                     <option value="{$categories[cat].mat_cat_ID}">{$categories[cat].mat_cat_name} </option>
                    {/if}
                    {/section}
                  </select>
                 </div>
               </div>

               <div class="form-group">
                <label for="lblquesMatLevel" class="col-sm-2 control-label">Level:</label>
                <div class="col-sm-5">
                  <select  class="form-control" name="matLev">
                    {section name=lev  loop=$levels}
                    {if $levels[lev].mat_lev_ID==$lev}
                    <option value="{$levels[lev].mat_lev_ID}" selected>{$levels[lev].mat_lev_name}</option>
                    {else}
                    <option value="{$levels[lev].mat_lev_ID}" >{$levels[lev].mat_lev_name}</option>
                    {/if}
                    {/section}
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="lblWeight" class="col-sm-2 control-label">Weight:</label>
                <div class="col-sm-5">
                <input type="text"  class="form-control" name="Weight" value="{$weight}">
                <span class="error">{$weightErr}</span> 
                </div>
              </div>


             <div class="form-group">
                <label for="lblFloorVerification" class="col-sm-2 control-label">Floor Verification:</label>
                {if $floor=='Y' OR $floor=='y'}
                <div class="col-sm-2">
                <div class="radio">
                <label> <input input type="radio" name="floorVerif" value="Y" checked >Yes</label>
                </div>
                </div>
                <div class="col-sm-3">
                <div class="radio">
                <label><input type="radio" name="floorVerif" value="N" >No </label>
                </div>
                </div>
                {else}
                <div class="col-sm-2">
                <div class="radio">
                <label> <input input type="radio" name="floorVerif" value="Y">Yes</label>
                </div>
                </div>
                <div class="col-sm-3">
                <div class="radio">
                <label><input type="radio" name="floorVerif" value="N"  checked >No </label>
                </div>
                </div>
                 {/if}
            </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-5">
                    <button type="submit" class="btn btn-info">ADD</button>
                  </div>
                </div>

              </form>
               <a href=" index.php"><button name="backQuesBtn" id="backBtnTeam" class="btn btn-danger"> CANCEL</button><a>
              </div><!-- end view-->


              </div>  <!-- end box-element -->
           </div>  <!-- end col-md-12  -->

     </div>  <!-- end mainContent -->
     </div>  <!-- end column -->
     </div><!--end container-fluid -->

   </div> <!-- end container-->
     
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../resources/js/bootstrap.min.js"></script> 

  </body>
</html>
