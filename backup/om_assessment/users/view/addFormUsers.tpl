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
                    <h1 contenteditable="true">Users section <small>Create a new user</small></h1>
                  </div>
                </div><!-- end view-->

              <div class="preview">Please fill up the next require information:</div>
              <br>

              
              <div class="view">
              <?php require("users/controller/formUsersController.php");?>
              <form class="form-horizontal" role="form" method="POST" action="../users/addNewUser.php">


                <div class="form-group">
                  <label for="inputUsername" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputUsername" value="{$username}" name="inputUsername">
                    <span class="error">{$userNameErr}</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputuserTeam" class="col-sm-2 control-label">Team</label>
                  <div class="col-sm-5">
                      <select  class="form-control" name="userTeam">
                      {section name=ti loop=$teamsInfo} 
                       <option value="{$teamsInfo[ti].team_name}">{$teamsInfo[ti].team_name}</option>
                      {/section}
                      </select>
                  </div>
                  <span class="error">{$TeamErr}</span>
                </div>

                <div class="form-group">
                  <label for="inputUserRole" class="col-sm-2 control-label">Role</label>
                  <div class="col-sm-5">
                      <select  class="form-control" name="inputUserRole">
                      {section name=rols loop=$roles} 
                       <option value="{$roles[rols].role_ID}">{$roles[rols].role_name}</option>
                      {/section}
                      </select>
                  </div>
                    <span class="error">{$RoleErr}</span>
                </div>

                <div class="form-group">
                  <label for="inputUserPosition" class="col-sm-2 control-label">Position</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputUserPosition" value="{$positionUser}" name="inputUserPosition">
                    <span class="error">{$PositionErr}</span>
                  </div>
                </div>
                
                <div class="form-group">
                    <label for="lblFloorVerification" class="col-sm-2 control-label">Status:</label>
                      <div class="col-sm-2">
                        <div class="radio">
                          <label> <input input type="radio" name="userStatus" value="A">Active </label>
                        </div>
                      </div>
                       <div class="col-sm-3">
                          <div class="radio">
                          <label><input type="radio" name="userStatus" value="I" checked>Inactive</label>
                          </div>
                       </div>
                          <span class="error">{$StatusErr}</span>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-5">
                    <button type="submit" class="btn btn-info">ADD</button>
                  </div>
                </div>

              </form>
               <a href=" index.php"><button name="backPrioBtn" id="backBtnTeam" class="btn btn-danger"> CANCEL</button><a>
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
