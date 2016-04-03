<?php /* Smarty version Smarty-3.1.16, created on 2014-05-04 17:48:04
         compiled from "..\question\view\addformQuestion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161205342b3a9e54504-69283659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2260509f942c64fab933692315fa9ef176a6599d' => 
    array (
      0 => '..\\question\\view\\addformQuestion.tpl',
      1 => 1399225681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161205342b3a9e54504-69283659',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5342b3aa120678_76087330',
  'variables' => 
  array (
    'maxIDQues' => 0,
    'maxID' => 0,
    'id' => 0,
    'atype' => 0,
    'qtype' => 0,
    'ques' => 0,
    'questionErr' => 0,
    'guide' => 0,
    'guideErr' => 0,
    'display' => 0,
    'displayErr' => 0,
    'categories' => 0,
    'cat' => 0,
    'levels' => 0,
    'lev' => 0,
    'weight' => 0,
    'weightErr' => 0,
    'floor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342b3aa120678_76087330')) {function content_5342b3aa120678_76087330($_smarty_tpl) {?><!DOCTYPE html>
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
                  <h1 contenteditable="true">Question section <small>Create a new question</small></h1>
                  </div>
                </div><!-- end view-->

              <div class="preview">Please fill up the next require information:</div>
              <br>

              
              <div class="view">

                <<?php ?>?php require("question/controller/addQuestionController.php");?<?php ?>>
                <form class="form-horizontal" role="form"  action="addQuestionIndex.php" method="POST">
               
                  <div class="form-group">
                    <label for="lbl_IDquestion" class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-3">
                        <?php  $_smarty_tpl->tpl_vars['maxID'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['maxID']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['maxIDQues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['maxID']->key => $_smarty_tpl->tpl_vars['maxID']->value) {
$_smarty_tpl->tpl_vars['maxID']->_loop = true;
?> 
                        <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['maxID']->value[$_smarty_tpl->getVariable('smarty')->value['section']['question_ID']['index']]+1, null, 0);?>
                        <input  type="text" class="form-control"  name="id_question" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"  required="required" readonly> 
                        <?php } ?>
                    </div>
                  </div>

                  <div class="form-group">
                     <label for="lblAssessmentType" class="col-sm-2 control-label">Assessment Type</label>
                      <div class="col-sm-5">
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
                          <?php if ($_smarty_tpl->tpl_vars['atype']->value[$_smarty_tpl->getVariable('smarty')->value['section']['at']['index']]['quest_ID']==$_smarty_tpl->tpl_vars['qtype']->value) {?>
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
                  </div>
                  <div class="form-group">
                    <label for="lblQuestion" class="col-sm-2 control-label">Question:</label>
                    <div class="col-sm-5">
                      <textarea name="question"  class="form-control"rows="3" cols="40"><?php echo $_smarty_tpl->tpl_vars['ques']->value;?>
</textarea>
                      <span class="error"><?php echo $_smarty_tpl->tpl_vars['questionErr']->value;?>
</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="lblGuideline" class="col-sm-2 control-label">Guideline:</label>
                    <div class="col-sm-5">
                     <textarea name="guideline" class="form-control"  rows="5" cols="40"><?php echo $_smarty_tpl->tpl_vars['guide']->value;?>
</textarea>
                     <span class="error"><?php echo $_smarty_tpl->tpl_vars['guideErr']->value;?>
</span>
                    </div>
                  </div>

                <div class="form-group">
                  <label for="lbldisplay" class="col-sm-2 control-label">Display Order:</label>
                  <div class="col-sm-5">
                   <input type="text"  class="form-control" type="number" min="1" name="DisplayOrder" value="<?php echo $_smarty_tpl->tpl_vars['display']->value;?>
">
                   <span class="error"><?php echo $_smarty_tpl->tpl_vars['displayErr']->value;?>
</span> 
                  </div>
                </div>

               <div class="form-group">
                 <label for="lblinputTeamCapability" class="col-sm-2 control-label">Category:</label>
                 <div class="col-sm-5">
                  <select  class="form-control" name="matCat">
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['cat'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cat']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['name'] = 'cat';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cat']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categories']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <?php if ($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cat']['index']]['mat_cat_ID']==$_smarty_tpl->tpl_vars['cat']->value) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cat']['index']]['mat_cat_ID'];?>
" selected ><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cat']['index']]['mat_cat_name'];?>
 </option>
                    <?php } else { ?>
                     <option value="<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cat']['index']]['mat_cat_ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cat']['index']]['mat_cat_name'];?>
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
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lev'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lev']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['name'] = 'lev';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['levels']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lev']['total']);
?>
                    <?php if ($_smarty_tpl->tpl_vars['levels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lev']['index']]['mat_lev_ID']==$_smarty_tpl->tpl_vars['lev']->value) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['levels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lev']['index']]['mat_lev_ID'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['levels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lev']['index']]['mat_lev_name'];?>
</option>
                    <?php } else { ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['levels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lev']['index']]['mat_lev_ID'];?>
" ><?php echo $_smarty_tpl->tpl_vars['levels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lev']['index']]['mat_lev_name'];?>
</option>
                    <?php }?>
                    <?php endfor; endif; ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="lblWeight" class="col-sm-2 control-label">Weight:</label>
                <div class="col-sm-5">
                <input type="text"  class="form-control" name="Weight" value="<?php echo $_smarty_tpl->tpl_vars['weight']->value;?>
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
                <label><input type="radio" name="floorVerif" value="N" >No </label>
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
                <label><input type="radio" name="floorVerif" value="N"  checked >No </label>
                </div>
                </div>
                 <?php }?>
            </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-5">
                    <button type="submit" class="btn btn-info">ADD</button>
                  </div>
                </div>

              </form>
               <a href=" index.php"><button name="backQuesBtn" id="backBtnTeam" class="btn btn-danger"> CANCEL</button><a>
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
