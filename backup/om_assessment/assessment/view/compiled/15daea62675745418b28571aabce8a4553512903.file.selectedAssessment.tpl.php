<?php /* Smarty version Smarty-3.1.16, created on 2014-05-02 18:38:28
         compiled from "..\assessment\view\selectedAssessment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2814853266a662028d3-72293449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15daea62675745418b28571aabce8a4553512903' => 
    array (
      0 => '..\\assessment\\view\\selectedAssessment.tpl',
      1 => 1398977431,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2814853266a662028d3-72293449',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53266a6635e547_17912478',
  'variables' => 
  array (
    'currentDate' => 0,
    'quest' => 0,
    'assessmentStatus' => 0,
    'teams_name' => 0,
    'categoryType' => 0,
    'questions' => 0,
    'key' => 0,
    'item' => 0,
    'ID_CUESTIONARIO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53266a6635e547_17912478')) {function content_53266a6635e547_17912478($_smarty_tpl) {?>

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
     <link href="../resources/css/PaginateMyTable.css" rel="stylesheet">
   
    <!-- -- jquery Scripts --  -->
      <script src="//code.jquery.com/jquery-1.9.1.js"></script>
      <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      <script  type="text/javascript" src="../resources/js/PaginateMyTable.js"></script>
 
    <!-- -- scripts --  -->
      <script src="../resources/js/functions.js"></script>
      <script src="../resources/js/assessmentCalculation.js"></script>
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
          <a class="navbar-brand" href="#">Checkpoint</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="../help">Help</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
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
            <li><a href="../questionary">Questionary</a></li>
            <li><a href="../maturityLevel">Levels</a></li>
            <li><a href="../maturityCategory">Categories</a></li>
            <li><a href="../users">Users</a></li>
            <li><a href="../team">Teams</a></li>            <li><a href="../prioritization">Prioritization</a></li>
          </ul>
        </div>

      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       
        <div class="row placeholders">
            
        <form id="Frm_assessment"  class="form-horizontal" role="form" action="addAssessmenteIndex.php" method="POST">
        <div class="row clearfix fixedContent">

          <h2 class="page-header col-sm-11 ">Assessment </h2> 

          <div class="col-md-6 column ui-sortable" id="firstContent">
       
           <<?php ?>?php require('controller/selectedAssessmentController.php'); ?<?php ?>>
     
 
            <div class="form-group">
              <label id="lbl_ID_assessmet" class="pull-left" >ID:</label>
              <input id="inp_id_assessment" class=" pull-left input-xlarge" type="text" name="id_assessment"  value="1" readonly> 
            </div>
    
                   
            <div class="form-group">
               <label class="pull-left" >Initial Date:</label>
               <input  id="input_iniDate" class="pull-left marginleft"  type="text" name="iniDateAssessmet" value="<?php echo $_smarty_tpl->tpl_vars['currentDate']->value;?>
" readonly>
 
                <label class="pull-left marginleft" id="lbl_fnlDate" >Final Date:</label>
                <input   id="input_fnlDate"   type="text" name="fnlDateAssessmet" value="<?php echo $_smarty_tpl->tpl_vars['currentDate']->value;?>
"readonly>
           </div>   
      
           
           <div class="form-group">
             <label class="pull-left" id="lbl_ques_questType">Assessment Type:</label>
             <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['q'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['q']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['q']['name'] = 'q';
$_smarty_tpl->tpl_vars['smarty']->value['section']['q']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['quest']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['q']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['q']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['q']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['q']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['q']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['q']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['q']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['q']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['q']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['q']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['q']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['q']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['q']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['q']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['q']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['q']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['q']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['q']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['q']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['q']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['q']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['q']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['q']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['q']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['q']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['q']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['q']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['q']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['q']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['q']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['q']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['q']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['q']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['q']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['q']['total']);
?>
             <input   id="input_ques_questType"  class="pull-left marginleft"  type="text" name="questType" value="<?php echo $_smarty_tpl->tpl_vars['quest']->value[$_smarty_tpl->getVariable('smarty')->value['section']['q']['index']]['quest_type'];?>
" readonly>
             <?php endfor; endif; ?>
           </div>
   

            <div class="form-group">
                <label id="lbl_status" class="pull-left" >Status:</label>
               <input  id="input_status" class="pull-left marginleft"   type="text" name="status" value="<?php echo $_smarty_tpl->tpl_vars['assessmentStatus']->value;?>
" readonly>
            </div>   


            <div class="form-group">
              <label id="lbl_OpExUser" class="pull-left">OpEx Evaluator:</label>
              <input  id="input_OpexEval" class="pull-left marginleft"  type="text" name="OpExUser" value="Marcela">
             </div>
            <div class="form-group">
              <label id="lbl_team_assessmet" class="pull-left">Team:</label>
                <div class="col-sm-4">
                     <select   name="matCat">
                      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['t'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['t']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['name'] = 't';
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['teams_name']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total']);
?>
                      <option class="pull-left " value="<?php echo $_smarty_tpl->tpl_vars['teams_name']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['team_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['teams_name']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['team_name'];?>
</option>
                      <?php endfor; endif; ?>
                     </select>
               </div>
           </div>

            <div class="control-group">
                <label id="lbl_gnlcomment"  class="pull-left" >General comments:</label>
                <textarea class="input-xlarge" id="txtArea_gnlcomment" rows="4" cols="50" name="gnlComments">Here goes a Comment</textarea>
            </div> 
            <button type="submit" class="btn btn-lg btn-primary" >Save</button>
           </div><!-- END firstContent-->

           <div id="secondContent" class="col-md-6 column ui-sortable well">
           <div id="boxResults">
            <h4>General Results</h4>
               </br> 
               <label class="pull-left marginleft"  class="pull-left">Overall Rating: </label>  
                <input type="text" name="overall_Rating" value="Overall Rating" readonly>
               <label  class="pull-left marginleft" class="pull-left">Overall Score: </label>  
                <input type="text" name="overall_Score" value="Overall Score" readonly>
             
                <h4>Categories</h4> 
                </br> 
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['cT'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cT']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['name'] = 'cT';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categoryType']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cT']['total']);
?>
                  <label  id="<?php echo $_smarty_tpl->tpl_vars['categoryType']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cT']['index']]['mat_cat_name'];?>
"class="pull-left"><?php echo $_smarty_tpl->tpl_vars['categoryType']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cT']['index']]['mat_cat_name'];?>
</label> 
                  <input class="pull-right marginleft" type="text" name="lbl_<?php echo $_smarty_tpl->tpl_vars['categoryType']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cT']['index']]['mat_cat_name'];?>
" value="" readonly> 
                <?php endfor; endif; ?>
            </div>              
        </div> <!-- END secondContent-->
      </div><!-- end row clearfix-->
     
       <table class="table table_assessment">
           <thead>
             <tr>
             <th class="text_align">Display Order</th>
             <th class="col-sm-2">Category</th>
             <th class="col-sm-2">Level</th>
             <th class="col-sm-3 text_align">Question</th>
             <th class="col-sm-1 text_align">Floor Verification</th>
             <th class="col-sm-2">Results </th>
             <th>Comments</th>
             </tr>
           </thead>

          <tbody>
            
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ques'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ques']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['questions']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['name'] = 'ques';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ques']['total']);
?>
            <tr>

              <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['questions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ques']['index']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
               <?php if ($_smarty_tpl->tpl_vars['key']->value==0) {?>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['question_display'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['category'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['level'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['question'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['question_floor_verif'];?>
</td>
                <?php } else { ?>
                 <td>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['option'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['option']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['option']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['item']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['option']['name'] = 'option';
$_smarty_tpl->tpl_vars['smarty']->value['section']['option']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['option']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['option']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['option']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['option']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['option']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['option']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['option']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['option']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['option']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['option']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['option']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['option']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['option']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['option']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['option']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['option']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['option']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['option']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['option']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['option']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['option']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['option']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['option']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['option']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['option']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['option']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['option']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['option']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['option']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['option']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['option']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['option']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['option']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['option']['total']);
?>
                    <div class="radio"> 
                       <input type="radio" name="qResponse<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['option']['index']]['question_ID'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['option']['index']]['mat_cat_name'];?>
 , <?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['option']['index']]['mat_lev_name'];?>
 , <?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['option']['index']]['question_ID'];?>
" onchange="getVal( <?php echo $_smarty_tpl->tpl_vars['ID_CUESTIONARIO']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['option']['index']]['question_ID'];?>
, '<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['option']['index']]['mat_cat_name'];?>
' ,'<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['option']['index']]['mat_lev_name'];?>
', this.value)" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['option']['index']]['options'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->getVariable('smarty')->value['section']['option']['index']]['options'];?>
 
                    </div> 
                    <?php endfor; endif; ?>     
                   </td>             
                <?php }?>
              <?php } ?>
              
                <td><textarea rows="3" cols="20" name="commentQ"> </textarea></td>
              </tr> 
          <?php endfor; endif; ?>
      
          </tbody>
        </table>

      </form>       

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
