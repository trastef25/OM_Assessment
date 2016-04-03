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

      <br>
           <div class="row clearfix"> 
           <div class="panel panel-default">
      
             <h1 class="page-header marginleft"></h1>
             <h2 class="sub-header marginleft">Team section </h2>
             
             <?php require("team/controller/displayTeamController.php");?>

            <form class="form-inline" role="form" action=" " method="POST">
            
                  <div class="form-group">
                  <label class="marginleft">ID</label>
                  <input name="idLevel"  type="id_team" class="form-control" id="id_team"  value=" " readonly>
                  </div>
           
                  <div class="form-group">
                  <label >Level</label>
                  <input name=""type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                  <div class="form-group">
                  <label>Assessment Type</label>
                  <select  class="form-control" name="assessmentType">
                  </select>
                  </div>
                  <button type="submit" name="addLevelBtn"class="btn btn-info "> SEARCH</button>
                  
            </form>

            <br><br>


             </div>  <!-- Default panel contents -->
            </div>  <!-- row clearfix -->

           <div class="row clearfix"> 
               <table class="table  teamTable">
                   <thead>
                     <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Localization</th>
                      <th>Region</th>
                      <th>Creation date</th>
                      <th>Capability</th>
                      <th>Process</th>
                      <th>Focal</th>
                      <th>OE contact</th>
                      <th></th>
                    </tr>
                  </thead>
                      {section name=t loop=$teamsInfo}
                    <tbody>
                        <tr>
                        <td>{$teamsInfo[t].team_ID}</td>
                        <td>{$teamsInfo[t].team_name}</td>
                        <td>{$teamsInfo[t].team_localization}</td>
                        <td>{$teamsInfo[t].team_region}</td>
                        <td>{$teamsInfo[t].team_creation_date}</td>
                        <td>{$teamsInfo[t].team_capability}</td>
                        <td>{$teamsInfo[t].team_process}</td>
                        <td>{$teamsInfo[t].team_focal}</td>
                        <td>{$teamsInfo[t].team_oe}</td>
                        <td> <a href='../team/updateTeamIndex.php?id={$teamsInfo[t].team_ID}'><input class="btn btn-default" type="submit" name="editTeam" value="EDIT"></a> </td>
                        </tr>
                    </tbody>
                        {/section}
                 </table>

           </div>  <!-- row clearfix -->


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
