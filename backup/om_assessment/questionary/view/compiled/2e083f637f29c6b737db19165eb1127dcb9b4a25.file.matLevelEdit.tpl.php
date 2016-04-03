<?php /* Smarty version Smarty-3.1.16, created on 2014-03-16 15:03:43
         compiled from "..\maturityLevel\view\matLeveldisplay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:992653252598954c47-36513742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e083f637f29c6b737db19165eb1127dcb9b4a25' => 
    array (
      0 => '..\\maturityLevel\\view\\matLeveldisplay.tpl',
      1 => 1394982218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '992653252598954c47-36513742',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53252598a2f5a9_47237337',
  'variables' => 
  array (
    'edit' => 0,
    'atype' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53252598a2f5a9_47237337')) {function content_53252598a2f5a9_47237337($_smarty_tpl) {?><!DOCTYPE html>
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

    <!-- -- scripts --  -->

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
   <!-- <script src="../resources/js/functions.js"></script>-->

    <!--Condicionals -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <h1 id="main_title">OM Assessment Tool</h1>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dashB"><a href="../dashboard">Dashboard</a></li>
            <li><a>Help</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a>Overview</a></li>
            <li class="dashB"><a href="../dashboard">Dashboard</a></li>
            <li><a>Assessments</a></li>
            <li><a>Accion Plans</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a>OM tools</a></li>
            <li><a href="../assessment">Assessments</a></li>
            <li><a>Action Plans (Report)</a></li>
            <li><a>Reports</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a>Maintenance</a></li>
            <li><a id="mat_lev" href="../maturityLevel">Maturity Level</a></li>
            <li id="mat_Cat"><a href="../maturityCategory">Maturity Category</a></li>
            <li><a id="li_question" href="../question">Questions</a></li>
            <li><a id="" href="../users">Users</a></li>
            <li><a href="../teams">Teams</a></li>
            <li><a>User Roles</a></li>
          </ul>
       </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <div id="mainContent"> 
   <div class="panel panel-default"> <!-- Default panel contents -->
       
    
       <h1 class="page-header"></h1>
        <h2 class="sub-header">Maturity Level</h2>
      
        <<?php ?>?php require("maturityLevel/controller/matLevController.php");?<?php ?>>

        <form class="form-inline" role="form" action="../maturityLevel/addMaturityLevel.php" method="POST">
        
              <div class="form-group">
              <label>ID</label>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['e'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['e']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['name'] = 'e';
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['edit']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total']);
?>
               <input name="idLevel"  type="id_level" class="form-control" id="id_level"  value="<?php echo $_smarty_tpl->tpl_vars['edit']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['mat_lev_ID'];?>
" readonly>
              
              </div>
       
              <div class="form-group">
              <label >Level</label>
              <input name="levelName"type="text" class="form-control" id="exampleInputPassword1" placeholder="<?php echo $_smarty_tpl->tpl_vars['edit']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['mat_lev_name'];?>
">
              </div>
              <?php endfor; endif; ?>
              <div class="form-group">
              <label>Assessment Type</label>
              <select  name="assessmentType">
              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['at'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['at']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['at']['name'] = 'at';
$_smarty_tpl->tpl_vars['smarty']->value['section']['at']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['atype']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['at']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['at']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['at']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['at']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['at']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['at']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['at']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['at']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['at']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['at']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['at']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['at']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['at']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['at']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['at']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['at']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['at']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['at']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['at']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['at']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['at']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['at']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['at']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['at']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['at']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['at']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['at']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['at']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['at']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['at']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['at']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['at']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['at']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['at']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['at']['total']);
?> 
               <option value="<?php echo $_smarty_tpl->tpl_vars['atype']->value[$_smarty_tpl->getVariable('smarty')->value['section']['at']['index']]['quest_ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['atype']->value[$_smarty_tpl->getVariable('smarty')->value['section']['at']['index']]['quest_type'];?>
</option>
              <?php endfor; endif; ?>
              </select>
              </div>

              <button type="submit" name="saveLevelBtn"class="btn btn-info add_button"></button>
              
        </form>

 </div>

  </div> <!-- end mainContent-->


      </div>  <!-- end column -->
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../resources/js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>

 
  </body>
</html>
<?php }} ?>
