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

     <span class="clearfix" ></span>
      <br>
     <div class="row clearfix">
     <div class="panel panel-default">
          <h1 class="page-header  "></h1>
          <h2 class="sub-header marginleft"> Prioritization </h2>
    
          <?php require("prioritization/controller/prioritizationIndexController.php");?>

          <form class="form-inline" role="form" action="../prioritization/addPrioritization.php" method="POST">
             
                <div class="form-group">
                <label class="marginleft">ID</label>
                 {foreach from=$maxIDPrio item=maxID } 
                 {$id=$maxID[prioritization_ID]+1}
                 <input name="idprio"  type="idprio" class="form-control" id="idprio"  value="{$id}" readonly>
                 {/foreach}
                </div>
         
                <div class="form-group">
                <label class="marginleft" >Prioritization</label>
                <input name="prioritizationName"type="text" class="form-control"  placeholder="Prioritization Name">
                </div>

                <div class="form-group">
                <label class="marginleft"># Days</label>
                <input name="numDays" type="number" class="form-control"   placeholder=" #days">
                </div>
               
               <button type="submit" name="addPrioBtn" class="btn btn-info marginleft "> ADD</button> 
               <span class="clearfix" ></span>
                <br><br>
               <span class="error">{$IdErr}</span>
               <span class="error">{$prioErr}</span>
               <span class="error">{$daysIDErr}</span>
            
          </form>
     </div>  <!-- Default panel contents -->
     </div>  <!-- end row clearfix -->


       <div class="row clearfix">

        <table class="table  prioTable">
              <thead>
              <tr>
              <th>Id</th>
              <th>Prioritization</th>
              <th># Days</th>
              <th></th>
              </tr>
              </thead>
              {section name=prio loop=$getPrio}
               <tbody>
                <tr>
                <td>{$getPrio[prio].prioritization_ID}</td>
                <td>{$getPrio[prio].prioritization_name}</td>
                <td>{$getPrio[prio].num_days}</td>
                <td> <a href='../prioritization/displayPrioritization.php?id={$getPrio[prio].prioritization_ID}'><input type="submit"  class="btn btn-default" name="editPrio" value="edit"></a> </td>
                </tr>
               </tbody>
                {/section}
        </table>


       </div>  <!-- end row clearfix -->



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
