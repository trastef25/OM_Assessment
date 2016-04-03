<?php /* Smarty version Smarty-3.1.16, created on 2014-03-10 04:48:46
         compiled from "..\maturityCategority\view\matCategorityIndex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13971531b60418de2d9-06138889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '909c94bdf8309e31d9847705c122c601531484aa' => 
    array (
      0 => '..\\maturityCategority\\view\\matCategorityIndex.tpl',
      1 => 1394426575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13971531b60418de2d9-06138889',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531b604195dcd1_36327086',
  'variables' => 
  array (
    'maxIDCat' => 0,
    'maxID' => 0,
    'id' => 0,
    'CatMat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531b604195dcd1_36327086')) {function content_531b604195dcd1_36327086($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/favicon/favicon.ico">

    <title>Checkpoint Website</title>

    <!-- Bootstrap core CSS -->
    <link href="../resources/css/bootstrap.css" rel="stylesheet">

    <!-- -- styles --  -->
    <link href="../resources/css/main.css" rel="stylesheet">
    <link href="../resources/css/myStyle.css" rel="stylesheet">

    <!-- -- scripts --  -->

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="../resources/js/ajax.js"></script>

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
            <li id="mat_Cat"><a href="../maturityCategority">Maturity Category</a></li>
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
        <h2 class="sub-header">Maturity Categority</h2>
      
        <<?php ?>?php require("maturityCategority/controller/matCategorityController.php");?<?php ?>>

        <form class="form-inline" role="form" action="../maturityCategority/addCatIndex.php" method="post">
              <div class="form-group">
              <label    >ID</label>
               <?php  $_smarty_tpl->tpl_vars['maxID'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['maxID']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['maxIDCat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['maxID']->key => $_smarty_tpl->tpl_vars['maxID']->value) {
$_smarty_tpl->tpl_vars['maxID']->_loop = true;
?> 
                <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['maxID']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mat_cat_ID']['index']]+1, null, 0);?>
              <input  type="id_level" class="form-control" id="id_level" name="id_cat" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
               <?php } ?>
              </div>
              
              <div class="form-group">
              <label  >Categority</label>
              <input  type="text" class="form-control" id="exampleInputPassword1" placeholder="Categority Name" name="cat_name">
              
             </div>
             <button type="submit" class="btn btn-info add_button"></button>
        </form>

        <table class="table">
         <thead>
        <tr>
        <th>Id</th>
        <th>Categority</th>
        <th></th>
        </tr>
         </thead>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['cat'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cat']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['name'] = 'cat';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['CatMat']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['total']);
?>
          <tbody>
          <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['CatMat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cat']['index']]['mat_cat_ID'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['CatMat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cat']['index']]['mat_cat_name'];?>
</td>
          <td>edit</td>
          </tr>
        <?php endfor; endif; ?>
            </tbody>
        </table>
</div> <!-- Ends Default panel contents -->

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
