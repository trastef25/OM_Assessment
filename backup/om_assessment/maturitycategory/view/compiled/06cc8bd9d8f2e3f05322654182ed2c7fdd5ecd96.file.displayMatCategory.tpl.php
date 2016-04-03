<?php /* Smarty version Smarty-3.1.16, created on 2014-05-04 03:50:17
         compiled from "..\maturityCategory\view\displayMatCategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304055325fe9e9ab399-52660731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06cc8bd9d8f2e3f05322654182ed2c7fdd5ecd96' => 
    array (
      0 => '..\\maturityCategory\\view\\displayMatCategory.tpl',
      1 => 1399175414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304055325fe9e9ab399-52660731',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5325fe9ea57aa5_72473956',
  'variables' => 
  array (
    'displayCatMat' => 0,
    'atype' => 0,
    'QUEST' => 0,
    'categorityErr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5325fe9ea57aa5_72473956')) {function content_5325fe9ea57aa5_72473956($_smarty_tpl) {?><!DOCTYPE html>
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

                <h1 class="page-header"></h1>
                <h2 class="sub-header marginleft">Category</h2>

                <<?php ?>?php require("maturityCategority/controller/matCategoryController.php");?<?php ?>>
                <form class="form-inline" role="form" action="../maturityCategory/updateCatIndex.php" method="post">

                <div class="form-group">
                <label class="marginleft">ID</label>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dis'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dis']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['name'] = 'dis';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['displayCatMat']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dis']['total']);
?>
                <input name="idcat" type="id_Cat" class="form-control" id="id_Cat"  value="<?php echo $_smarty_tpl->tpl_vars['displayCatMat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dis']['index']]['mat_cat_ID'];?>
" readonly>
                </div>

                <div class="form-group">
                <label class="marginleft">Categority</label>
                <input   type="text" class="form-control" id="exampleInputPassword1" placeholder="Categority Name" name="cat_name" value="<?php echo $_smarty_tpl->tpl_vars['displayCatMat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dis']['index']]['mat_cat_name'];?>
">
                <?php endfor; endif; ?>
                </div>

              <div class="form-group">
              <label class="marginleft">Assessment Type</label>
              <select class="form-control"  name="assessmentType">
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
               <?php if ($_smarty_tpl->tpl_vars['atype']->value[$_smarty_tpl->getVariable('smarty')->value['section']['at']['index']]['quest_type']==$_smarty_tpl->tpl_vars['QUEST']->value) {?> 
               <option value="<?php echo $_smarty_tpl->tpl_vars['atype']->value[$_smarty_tpl->getVariable('smarty')->value['section']['at']['index']]['quest_ID'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['atype']->value[$_smarty_tpl->getVariable('smarty')->value['section']['at']['index']]['quest_type'];?>
</option>
               <?php } else { ?>
               <option value="<?php echo $_smarty_tpl->tpl_vars['atype']->value[$_smarty_tpl->getVariable('smarty')->value['section']['at']['index']]['quest_ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['atype']->value[$_smarty_tpl->getVariable('smarty')->value['section']['at']['index']]['quest_type'];?>
</option>
               <?php }?>
              <?php endfor; endif; ?>
              </select>
              </div>
                <br><br>
              <span class="clearfix" ></span>
              <button type="submit" class="btn btn-info marginleft">UPDATE</button> 
              </form>
               <a href=" index.php"><button name="backCatBtn"  class="btn btn-danger backBtn"> CANCEL</button><a>
               <span class="clearfix" ></span>
               <span class="error"><?php echo $_smarty_tpl->tpl_vars['categorityErr']->value;?>
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
