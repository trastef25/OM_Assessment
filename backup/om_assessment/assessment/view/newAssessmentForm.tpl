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
    <br>

     <div class="container-fluid"> 
     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
     <div id="mainContent"> 
      <div class="row clearfix">
         <h2 class="page-header col-sm-11 ">Assessment </h2>   
        <form id="Frm_assessment"  class="form-horizontal" role="form" action="addAssessmenteIndex.php" method="POST">
        <?php require('controller/selectedAssessmentController.php'); ?>
   
    <div class="col-md-6 column ui-sortable" id="firstContent">

        <div class="form-group">
              <label id="lbl_ID_assessmet" class="pull-left" >ID:</label>
              <input id="inp_id_assessment" class="marginleft input-xlarge" type="text" name="id_assessment"  value="1" readonly> 
         </div>

         <div class="form-group">
               <label class="pull-left" >Initial Date:</label>
               <input  id="input_iniDate" class="marginleft"  type="text" name="iniDateAssessmet" value="{$currentDate}" readonly>
        </div> 
        <span class="clearfix" ></span>
        <div class="form-group">
                <label class="pull-left" id="lbl_fnlDate" >Final Date:</label>
                <input   id="input_fnlDate" class="pull-left marginleft"   type="text" name="fnlDateAssessmet" value="{$currentDate}"readonly>
        </div>  
       <div class="form-group">
         <label class="pull-left" id="lbl_ques_questType">Assessment Type:</label>
         {section name=q loop=$quest}
         <input   id="input_ques_questType"  class="pull-left marginleft"  type="text" name="questType" value="{$quest[q].quest_type}" readonly>
         {/section}
       </div>
       <div class="form-group">
          <label id="lbl_status" class="pull-left" >Status:</label>
         <input  id="input_status" class="pull-left marginleft"   type="text" name="status" value="{$assessmentStatus}" readonly>
       </div>   
      <div class="form-group">
        <label id="lbl_OpExUser" class="pull-left">OpEx Evaluator:</label>
        <input  id="input_OpexEval" class="pull-left marginleft"  type="text" name="OpExUser" value="Marcela">
       </div>
      <div class="form-group">
        <label id="lbl_team_assessmet" class="pull-left">Team:</label>
        <div class="col-sm-4">
        {section name=t loop=$team_name}
         <input type="text" id="teamInputAssessment" value="{$team_name[t].team_name}" readonly>
        {/section}
        </div>
     </div>
    <div class="form-group">
        <label id="lbl_gnlcomment"  class="pull-left">General comments:</label>
        <textarea class="input-xlarge" id="txtArea_gnlcomment" rows="4" cols="50" name="gnlComments">Here goes a Comment</textarea>
    </div> 
     </div><!-- END firstContent-->

       <div id="secondContent" class="col-md-6 column ui-sortable well">
           <div id="boxResults">
            <h4>General Results</h4>
               <br> 
               <label class="pull-left marginleft"  class="pull-left">Overall Rating: </label>  
                <input type="text" name="overall_Rating" value="Overall Rating" readonly>
               <label  class="pull-left marginleft" class="pull-left">Overall Score: </label>  
                <input type="text" name="overall_Score" value="Overall Score" readonly>
             
                <h4>Categories</h4> 
                <br> 
                {section name=cT loop=$categoryType}
                  <label  id="{$categoryType[cT].mat_cat_name}"class="pull-left">{$categoryType[cT].mat_cat_name}</label> 
                  <input class="pull-right marginleft" type="text" name="lbl_{$categoryType[cT].mat_cat_name}" value="" readonly> 
                {/section}
            </div>              
        </div> <!-- END secondContent-->

 <div id="thirdContent" class="col-md-6 ">
 <button type="submit" id="btnsaveAssessment"class="btn btn-lg btn-info" >SAVE</button>
 <span class="clearfix"></span>
 <a href=" index.php"><input name="backBtnAssessment" id="backBtnAssessment" class="btn btn-danger" value=" CANCEL"></a>
 </div> <!-- END thirdContent-->

    </div><!-- end row clearfix-->


      <div class="row clearfix">

       <table class="table table_assessment">
           <thead>
             <tr>
             <th class="text_align">Display Order</th>
             <th class="col-sm-2">Category</th>
             <th class="col-sm-2">Level</th>
             <th class="col-sm-3 text_align">Question</th>
             <th class="col-sm-1 text_align">Floor Verification</th>
             <th class="col-sm-2">Results </th>
             <th>Comments</th>
             </tr>
           </thead>

          <tbody>
            
          {section loop=$questions name=ques}
            <tr>

              {foreach key=key item=item from=$questions[ques]}
               {if $key == 0}
                    <td>{$item.question_display}</td>
                    <td>{$item.category}</td>
                    <td>{$item.level}</td>
                    <td>{$item.question}</td>
                    <td>{$item.question_floor_verif}</td>
                {else}
                 <td>
                    {section loop=$item name=option}
                    <div class="radio"> 
                       <input type="radio" name="qResponse{$item[option].question_ID}" class="{$item[option].mat_cat_name} , {$item[option].mat_lev_name} , {$item[option].question_ID}" onchange="getVal( {$ID_CUESTIONARIO}, {$item[option].question_ID}, '{$item[option].mat_cat_name}' ,'{$item[option].mat_lev_name}', this.value)" value="{$item[option].options}">{$item[option].options} 
                    </div> 
                    {/section}     
                   </td>             
                {/if}
              {/foreach}
              
                <td><textarea rows="3" cols="20" name="commentQ"> </textarea></td>
              </tr> 
          {/section}
         </tbody>
        </table>

     </form>    

      </div><!-- end row clearfix-->

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
