<?php /* Smarty version Smarty-3.1.16, created on 2014-05-04 05:35:24
         compiled from "..\prioritization\view\prioritizationIndex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10165362bfc3aca4c2-79725637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '773678d6715ae9674619f986c43a66c779ab1d30' => 
    array (
      0 => '..\\prioritization\\view\\prioritizationIndex.tpl',
      1 => 1399181659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10165362bfc3aca4c2-79725637',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5362bfc3c1ab04_89268413',
  'variables' => 
  array (
    'maxIDPrio' => 0,
    'maxID' => 0,
    'id' => 0,
    'IdErr' => 0,
    'prioErr' => 0,
    'daysIDErr' => 0,
    'getPrio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5362bfc3c1ab04_89268413')) {function content_5362bfc3c1ab04_89268413($_smarty_tpl) {?><!DOCTYPE html>
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
    
          <<?php ?>?php require("prioritization/controller/prioritizationIndexController.php");?<?php ?>>

          <form class="form-inline" role="form" action="../prioritization/addPrioritization.php" method="POST">
             
                <div class="form-group">
                <label class="marginleft">ID</label>
                 <?php  $_smarty_tpl->tpl_vars['maxID'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['maxID']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['maxIDPrio']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['maxID']->key => $_smarty_tpl->tpl_vars['maxID']->value) {
$_smarty_tpl->tpl_vars['maxID']->_loop = true;
?> 
                 <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['maxID']->value[$_smarty_tpl->getVariable('smarty')->value['section']['prioritization_ID']['index']]+1, null, 0);?>
                 <input name="idprio"  type="idprio" class="form-control" id="idprio"  value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" readonly>
                 <?php } ?>
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
               <span class="error"><?php echo $_smarty_tpl->tpl_vars['IdErr']->value;?>
</span>
               <span class="error"><?php echo $_smarty_tpl->tpl_vars['prioErr']->value;?>
</span>
               <span class="error"><?php echo $_smarty_tpl->tpl_vars['daysIDErr']->value;?>
</span>
            
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
              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['prio'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['prio']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['name'] = 'prio';
$_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['getPrio']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['prio']['total']);
?>
               <tbody>
                <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['getPrio']->value[$_smarty_tpl->getVariable('smarty')->value['section']['prio']['index']]['prioritization_ID'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['getPrio']->value[$_smarty_tpl->getVariable('smarty')->value['section']['prio']['index']]['prioritization_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['getPrio']->value[$_smarty_tpl->getVariable('smarty')->value['section']['prio']['index']]['num_days'];?>
</td>
                <td> <a href='../prioritization/displayPrioritization.php?id=<?php echo $_smarty_tpl->tpl_vars['getPrio']->value[$_smarty_tpl->getVariable('smarty')->value['section']['prio']['index']]['prioritization_ID'];?>
'><input type="submit"  class="btn btn-default" name="editPrio" value="edit"></a> </td>
                </tr>
               </tbody>
                <?php endfor; endif; ?>
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
<?php }} ?>
