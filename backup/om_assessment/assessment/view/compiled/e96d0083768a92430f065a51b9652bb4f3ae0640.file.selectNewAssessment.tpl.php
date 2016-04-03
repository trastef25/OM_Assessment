<?php /* Smarty version Smarty-3.1.16, created on 2014-05-04 21:51:03
         compiled from "..\assessment\view\selectNewAssessment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:306795366afc11d19b9-98927251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e96d0083768a92430f065a51b9652bb4f3ae0640' => 
    array (
      0 => '..\\assessment\\view\\selectNewAssessment.tpl',
      1 => 1399240259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306795366afc11d19b9-98927251',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5366afc131e656_95027080',
  'variables' => 
  array (
    'getQuesType' => 0,
    'teams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5366afc131e656_95027080')) {function content_5366afc131e656_95027080($_smarty_tpl) {?><!DOCTYPE html>
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
   
<span class="clearfix" ></span> 
    <h1 class="page-header">Assessment Section</h1>
 
       <div class="well">
                <p>In this section you will be able to do different evaluations to measure the team's progress</p>
                <p>Please select the type of evaluation you would like to do:</p>
          <br>
          <form class="form-inline" role="form" action="selectedAssessment.php" method="POST">
              
              <div class="form-group">
                <label class="marginleft">Assessment type:</label>
                <select class="form-control marginleft"  name="assessmentType">
              <div class="col-sm-3">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['qT'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['qT']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['name'] = 'qT';
$_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['getQuesType']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['qT']['total']);
?> 
                <option value="<?php echo $_smarty_tpl->tpl_vars['getQuesType']->value[$_smarty_tpl->getVariable('smarty')->value['section']['qT']['index']]['quest_ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['getQuesType']->value[$_smarty_tpl->getVariable('smarty')->value['section']['qT']['index']]['quest_type'];?>
</option>
                <?php endfor; endif; ?>
             </div>
                </select>
             </div><!-- end form-control-->
    
              <div class="form-group">
                <label class="marginleft">Team:</label>
                <select class="form-control marginleft"  name="assessmentTeams">
              <div class="col-sm-3">
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['T'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['T']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['T']['name'] = 'T';
$_smarty_tpl->tpl_vars['smarty']->value['section']['T']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['teams']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['T']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['T']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['T']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['T']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['T']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['T']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['T']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['T']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['T']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['T']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['T']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['T']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['T']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['T']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['T']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['T']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['T']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['T']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['T']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['T']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['T']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['T']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['T']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['T']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['T']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['T']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['T']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['T']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['T']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['T']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['T']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['T']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['T']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['T']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['T']['total']);
?> 
                <option value="<?php echo $_smarty_tpl->tpl_vars['teams']->value[$_smarty_tpl->getVariable('smarty')->value['section']['T']['index']]['team_ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['teams']->value[$_smarty_tpl->getVariable('smarty')->value['section']['T']['index']]['team_name'];?>
</option>
                <?php endfor; endif; ?>
             </div>
                </select>
             </div><!-- end form-control-->
              
              <input class="btn btn-info marginleft" type="submit" name="startEvaluation" value="NEW">
           </form>
              <a href="index.php"><button name="backBtnSelectA" id="backBtnSelectA" class="btn btn-danger"> CANCEL</button><a>
        </div><!-- end class well-->


























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
