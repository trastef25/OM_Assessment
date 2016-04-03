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
                    <h1 contenteditable="true">Team section <small>Update a team</small></h1>
                  </div>
                </div><!-- end view-->

              <div class="preview">Please fill up the next require information:</div>
              <br>

              
              <div class="view">

              <?php require("team/controller/teamUpdatedController.php");?>
              <form class="form-horizontal" role="form" method="POST" action="../team/editTeamIndex.php">
             

              {section name=ti loop=$teamsInfoByID}
                <div class="form-group">
                  <label for="inputIDTeam" class="col-sm-2 control-label">ID</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="inputIdTeam" name="inputIdTeam"  value="{$teamsInfoByID[ti].team_ID}" readonly>
                    <span class="error">{$IdErr}</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamName" class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputTeamName" name="inputTeamName" value="{$teamsInfoByID[ti].team_name}">
                    <span class="error">{$TeamNameErr}</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamCreationDate" class="col-sm-2 control-label">Creation date</label>
                  <div class="col-sm-5">
                    <input type="date" class="form-control" id="inputTeamCreationDate" name="inputTeamCreationDate"value="{$teamsInfoByID[ti].team_creation_date}">
                     <span class="error">{$DateErr}</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamLocalization" class="col-sm-2 control-label">Localization</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputTeamLocalization" name="inputTeamLocalization"value="{$teamsInfoByID[ti].team_localization}">
                    <span class="error">{$LocalErr}</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamRegion" class="col-sm-2 control-label">Region</label>
                  <div class="col-sm-5">
                   <input type="text" class="form-control" id="inputTeamRegion" name="inputTeamRegion"value="{$teamsInfoByID[ti].team_region}">
                    <span class="error">{$RegionErr}</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamCapability" class="col-sm-2 control-label">Capability</label>
                  <div class="col-sm-5">
                   <input type="text" class="form-control" id="inputTeamCapability" name="inputTeamCapability"value="{$teamsInfoByID[ti].team_capability}">
                    <span class="error">{$CapabilityErr}</span>                 
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputTeamProcess" class="col-sm-2 control-label">Process</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputTeamProcess" name="inputTeamProcess"value="{$teamsInfoByID[ti].team_process}">
                    <span class="error">{$ProcessErr}</span>               
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamFocal" class="col-sm-2 control-label">Focal</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputTeamFocal" name="inputTeamFocal"value="{$teamsInfoByID[ti].team_focal}">
                    <span class="error">{$FocalErr}</span>                
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputTeamContract" class="col-sm-2 control-label">Contract</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputTeamContract" name="inputTeamContract"value="{$teamsInfoByID[ti].team_contract}">
                    <span class="error">{$ContractErr}</span>                   
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamClient" class="col-sm-2 control-label">Client</label>
                  <div class="col-sm-5">
                    <input type="Text" class="form-control" id="inputTeamClient" name="inputTeamClient"value="{$teamsInfoByID[ti].team_client}">
                    <span class="error">{$ClientErr}</span>                 
                  </div>
                </div>

               <div class="form-group">
                  <label for="inputTeamDM" class="col-sm-2 control-label">DM</label>
                  <div class="col-sm-5">
                    <input type="Text" class="form-control" id="inputTeamDM" name="inputTeamDM"value="{$teamsInfoByID[ti].team_dm}">
                    <span class="error">{$DMErr}</span>                
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamOEContact" class="col-sm-2 control-label">OE Contact</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputTeamOEContact" name="inputTeamOEContact"value="{$teamsInfoByID[ti].team_oe}">
                    <span class="error">{$OEErr}</span>                  
                  </div>
                </div>
 
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-5">
                    <button type="submit" class="btn btn-info">UPDATE</button>
                  </div>
                </div>
                {/section}
              </form>
               <a href=" displayTeamIndex.php"><button name="backPrioBtn" id="backBtnUTeam" class="btn btn-danger"> CANCEL</button><a>
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

