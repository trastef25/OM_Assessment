<?php /* Smarty version Smarty-3.1.16, created on 2014-05-04 05:35:23
         compiled from "view\teamViewIndex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:279855340cc78406142-23500064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b364e97c1a2e6f22f798016286e328a484f31505' => 
    array (
      0 => 'view\\teamViewIndex.tpl',
      1 => 1399181654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279855340cc78406142-23500064',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5340cc7848b499_99946177',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5340cc7848b499_99946177')) {function content_5340cc7848b499_99946177($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h1 contenteditable="true">Team section </h1>
                  </div>
               </div>
            
               <div class="preview">Please choose the action you want to do:</div>
               <br>

          <div class="view">

              <form class="form-horizontal" role="form" method="POST" action="../team/displayTeamIndex.php">
                 <div class="form-group">
                  <label for="inputTeamClient" class="col-sm-2 control-label">View all teams:</label>
                  <div class="col-sm-offset-2 col-sm-5">
                    <button type="submit" class="btn btn-info">DISPLAY</button>
                  </div>
                </div>
              </form>

              <form class="form-horizontal" role="form" method="POST" action="../team/addFormTeamIndex.php">
                 <div class="form-group">
                  <label for="inputTeamClient" class="col-sm-2 control-label">Add a team:</label>
                  <div class="col-sm-offset-2 col-sm-5">
                    <button type="submit" class="btn btn-info"> ADD  </button>
                  </div>
                </div>
              </form>

          </div><!-- end view -->



          </div>  <!-- end box-element -->
        </div>  <!-- end col-md-12 -->

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
<?php }} ?>
