<?php /* Smarty version Smarty-3.1.16, created on 2014-05-02 03:05:51
         compiled from "..\prioritization\view\prioritizationDisplay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:219215362dcfa0b0dc2-86424224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72f3f0b7932014e511790a5dca85699819866af4' => 
    array (
      0 => '..\\prioritization\\view\\prioritizationDisplay.tpl',
      1 => 1398999947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219215362dcfa0b0dc2-86424224',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5362dcfa1b6af8_77781737',
  'variables' => 
  array (
    'infoPriobyID' => 0,
    'IdErr' => 0,
    'prioErr' => 0,
    'daysIDErr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5362dcfa1b6af8_77781737')) {function content_5362dcfa1b6af8_77781737($_smarty_tpl) {?><!DOCTYPE html>
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
                    <li><a href="../ ">Login</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                  <li class="active"><a href="#">Overview</a></li>
                  <li><a href="../dashboard">Dashboard</a></li>
                  <li><a>Assessments</a></li>
                  <li><a>Accion Plans</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                  <li class="active"><a>OM tools</a></li>
                  <li><a href="../assessment/index.php">Assessments</a></li>
                  <li><a>Action Plans  </a></li>
                  <li><a>Reports</a></li>
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
          <h1 class="page-header  "></h1>
          <h2 class="sub-header marginleft"> Prioritization </h2>
    
          <<?php ?>?php require("prioritization/controller/prioritizationIndexController.php");?<?php ?>>

          <form class="form-inline" role="form" action="../prioritization/updatePrioritization.php" method="POST">
               <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['name'] = 'infoPrio';
$_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['infoPriobyID']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['infoPrio']['total']);
?>  
              
                <div class="form-group">
                <label class="marginleft">ID</label>
                <input name="idprio"  type="idprio" class="form-control" id="idprio"  value="<?php echo $_smarty_tpl->tpl_vars['infoPriobyID']->value[$_smarty_tpl->getVariable('smarty')->value['section']['infoPrio']['index']]['prioritization_ID'];?>
" readonly> 
                </div>
                            
                <div class="form-group">
                <label class="marginleft" >Prioritization</label>
                <input name="PrioritizationName"type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['infoPriobyID']->value[$_smarty_tpl->getVariable('smarty')->value['section']['infoPrio']['index']]['prioritization_name'];?>
"  >
                </div>

                <div class="form-group">
                <label class="marginleft"># Days</label>
                <input name="numDays"type="number" class="form-control"  min="1" value="<?php echo $_smarty_tpl->tpl_vars['infoPriobyID']->value[$_smarty_tpl->getVariable('smarty')->value['section']['infoPrio']['index']]['num_days'];?>
">
                </div>
                <?php endfor; endif; ?>
               <br><br>
               <button type="submit" name="UpdatePrioBtn"class="btn btn-info marginleft ">UPDATE</button>

           </form>
               <a href=" index.php"><button name="backPrioBtn"  class="btn btn-danger backBtn"> CANCEL</button><a>
               <span class="clearfix" ></span>
               <span class="error"><?php echo $_smarty_tpl->tpl_vars['IdErr']->value;?>
</span>
               <span class="error"><?php echo $_smarty_tpl->tpl_vars['prioErr']->value;?>
</span>
               <span class="error"><?php echo $_smarty_tpl->tpl_vars['daysIDErr']->value;?>
</span>
               <br><br>
     </div>  <!-- Default panel contents -->
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
<?php }} ?>
