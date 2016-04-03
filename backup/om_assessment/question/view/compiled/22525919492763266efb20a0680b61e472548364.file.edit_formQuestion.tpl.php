<?php /* Smarty version Smarty-3.1.16, created on 2014-05-04 19:20:25
         compiled from "..\question\view\edit_formQuestion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1123153420bb244df07-86851386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22525919492763266efb20a0680b61e472548364' => 
    array (
      0 => '..\\question\\view\\edit_formQuestion.tpl',
      1 => 1399231215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1123153420bb244df07-86851386',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53420bb2859b70_99687031',
  'variables' => 
  array (
    'displayQuestion' => 0,
    'questType' => 0,
    'quest' => 0,
    'questionErr' => 0,
    'guideErr' => 0,
    'displayErr' => 0,
    'category' => 0,
    'cat' => 0,
    'Levels' => 0,
    'lev' => 0,
    'weightErr' => 0,
    'floor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53420bb2859b70_99687031')) {function content_53420bb2859b70_99687031($_smarty_tpl) {?><!DOCTYPE html>
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
                  <h1 contenteditable="true">Question section <small>Update a question</small></h1>
                  </div>
                </div><!-- end view-->

              <div class="preview">Please fill up the next require information:</div>
              <br>
              
              <div class="view">

                <<?php ?>?php require("question/controller/displayEditQController.php");?<?php ?>>
                <form class="form-horizontal" role="form"  action="updateQuestionIndex.php" method="POST">
               
                  <div class="form-group">
                    <label for="lbl_IDquestion" class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-3">
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['displayQuestion']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?> 
                          <input  type="text" name="id_question" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['displayQuestion']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']]['question_ID'];?>
" readonly> 
                        <?php endfor; endif; ?>
                    </div>
                  </div>

                  <div class="form-group">
                     <label for="lblAssessmentType" class="col-sm-2 control-label">Assessment Type</label>
                      <div class="col-sm-5">
                         <select class="form-control"  name="assessmentType">
                          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['at'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['at']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['at']['name'] = 'at';
$_smarty_tpl->tpl_vars['smarty']->value['section']['at']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['questType']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                            <?php if ($_smarty_tpl->tpl_vars['questType']->value[$_smarty_tpl->getVariable('smarty')->value['section']['at']['index']]['quest_ID']==$_smarty_tpl->tpl_vars['quest']->value) {?> 
                             <option value="<?php echo $_smarty_tpl->tpl_vars['questType']->value[$_smarty_tpl->getVariable('smarty')->value['section']['at']['index']]['quest_ID'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['questType']->value[$_smarty_tpl->getVariable('smarty')->value['section']['at']['index']]['quest_type'];?>
</option>
                            <?php } else { ?>
                             <option value="<?php echo $_smarty_tpl->tpl_vars['questType']->value[$_smarty_tpl->getVariable('smarty')->value['section']['at']['index']]['quest_ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['questType']->value[$_smarty_tpl->getVariable('smarty')->value['section']['at']['index']]['quest_type'];?>
</option>
                            <?php }?>
                          <?php endfor; endif; ?>
                         </select>
                      </div>
                  </div>
                  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dQ'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['name'] = 'dQ';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['displayQuestion']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['total']);
?>
                  <div class="form-group">
                    <label for="lblQuestion" class="col-sm-2 control-label">Question:</label>
                    <div class="col-sm-5">
                    <textarea name="question" rows="3"  class="form-control" cols="40"><?php echo $_smarty_tpl->tpl_vars['displayQuestion']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dQ']['index']]['question'];?>
</textarea>
                      <span class="error"><?php echo $_smarty_tpl->tpl_vars['questionErr']->value;?>
</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="lblGuideline" class="col-sm-2 control-label">Guideline:</label>
                    <div class="col-sm-5">
                    <textarea name="guideline" rows="5" class="form-control" cols="40"><?php echo $_smarty_tpl->tpl_vars['displayQuestion']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dQ']['index']]['question_guide'];?>
</textarea>
                     <span class="error"><?php echo $_smarty_tpl->tpl_vars['guideErr']->value;?>
</span>
                    </div>
                  </div>

                <div class="form-group">
                  <label for="lbldisplay" class="col-sm-2 control-label">Display Order:</label>
                  <div class="col-sm-5">
                <input type="text" name="DisplayOrder" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['displayQuestion']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dQ']['index']]['question_display'];?>
">
                   <span class="error"><?php echo $_smarty_tpl->tpl_vars['displayErr']->value;?>
</span> 
                  </div>
                </div> 
               <?php endfor; endif; ?>
               <div class="form-group">
                 <label for="lblinputTeamCapability" class="col-sm-2 control-label">Category:</label>
                 <div class="col-sm-5">
                  <select  class="form-control" name="matCat">
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['cat'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cat']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['name'] = 'cat';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['category']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <?php if ($_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cat']['index']]['mat_cat_name']==$_smarty_tpl->tpl_vars['cat']->value) {?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cat']['index']]['mat_cat_ID'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cat']['index']]['mat_cat_name'];?>
</option>
                    <?php } else { ?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cat']['index']]['mat_cat_ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cat']['index']]['mat_cat_name'];?>
</option>
                    <?php }?>
                   <?php endfor; endif; ?>
                  </select>
                 </div>
               </div>

               <div class="form-group">
                <label for="lblquesMatLevel" class="col-sm-2 control-label">Level:</label>
                <div class="col-sm-5">
                  <select  class="form-control" name="matLev">
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lv'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lv']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['name'] = 'lv';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Levels']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lv']['total']);
?>
                     <?php if ($_smarty_tpl->tpl_vars['Levels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lv']['index']]['mat_lev_name']==$_smarty_tpl->tpl_vars['lev']->value) {?>
                       <option value="<?php echo $_smarty_tpl->tpl_vars['Levels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lv']['index']]['mat_lev_ID'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['Levels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lv']['index']]['mat_lev_name'];?>
</option>
                      <?php } else { ?>
                       <option value="<?php echo $_smarty_tpl->tpl_vars['Levels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lv']['index']]['mat_lev_ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['Levels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lv']['index']]['mat_lev_name'];?>
</option>
                     <?php }?>
                     <?php endfor; endif; ?>
                  </select>
                </div>
              </div>
              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dQ'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['name'] = 'dQ';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['displayQuestion']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dQ']['total']);
?>
              <div class="form-group">
                <label for="lblWeight" class="col-sm-2 control-label">Weight:</label>
                <div class="col-sm-5">
               <input type="text" name="Weight"  class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['displayQuestion']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dQ']['index']]['question_weight'];?>
">
                <span class="error"><?php echo $_smarty_tpl->tpl_vars['weightErr']->value;?>
</span> 
                </div>
              </div>

             <div class="form-group">
                <label for="lblFloorVerification" class="col-sm-2 control-label">Floor Verification:</label>
                <?php if ($_smarty_tpl->tpl_vars['floor']->value=='Y'||$_smarty_tpl->tpl_vars['floor']->value=='y') {?>
                <div class="col-sm-2">
                <div class="radio">
                <label> <input input type="radio" name="floorVerif" value="Y" checked >Yes</label>
                </div>
                </div>
                <div class="col-sm-3">
                <div class="radio">
                <label><input type="radio" name="floorVerif" value="N">No </label>
                </div>
                </div>
                <?php } else { ?>
                <div class="col-sm-2">
                <div class="radio">
                <label> <input input type="radio" name="floorVerif" value="Y">Yes</label>
                </div>
                </div>
                <div class="col-sm-3">
                <div class="radio">
                <label><input type="radio" name="floorVerif" value="N" checked >No </label>
                </div>
                </div>
                 <?php }?>
            </div>
                <?php endfor; endif; ?>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-5">
                    <button type="submit" class="btn btn-info">UPDATE</button>
                  </div>
                </div>

              </form>
               <a href="displayQuestionIndex.php"><button name="backQuesBtn" id="backBtnUQuest" class="btn btn-danger"> CANCEL</button><a>
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
<?php }} ?>
