<?php /* Smarty version Smarty-3.1.16, created on 2014-05-04 19:12:03
         compiled from "..\question\view\displayQuestion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3257553420bac542291-70209016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51670dd0f5900bde675cc730dcbd61b03d3777a3' => 
    array (
      0 => '..\\question\\view\\displayQuestion.tpl',
      1 => 1399230676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3257553420bac542291-70209016',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53420bac7a96c6_60404016',
  'variables' => 
  array (
    'question_List' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53420bac7a96c6_60404016')) {function content_53420bac7a96c6_60404016($_smarty_tpl) {?><!DOCTYPE html>
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

      <br>
           <div class="row clearfix"> 
           <div class="panel panel-default">
      
             <h1 class="page-header marginleft"></h1>
            <h2 class="sub-header">Questions Section</h2>
              

            <form class="form-inline" role="form" action=" " method="POST">
            
                  <div class="form-group">
                  <label class="marginleft">ID</label>
                  <input name="idLevel"  type="id_team" class="form-control" id="id_team"  value=" " readonly>
                  </div>
           
                  <div class="form-group">
                  <label >Level</label>
                  <input name=""type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                  </div>
                  <div class="form-group">
                  <label>Assessment Type</label>
                  <select  class="form-control" name="assessmentType">
                  </select>
                  </div>
                  <button type="submit" name="addLevelBtn"class="btn btn-info "> SEARCH</button>
                  
            </form>

            <br><br>


             </div>  <!-- Default panel contents -->
            </div>  <!-- row clearfix -->

           <div class="row clearfix"> 
                <table class="table t_question " id="dev-table">
                <thead>
                <tr>
                <th>ID</th>
                <th>Questionary</th>
                <th>Question</th>
                <th>Guidelines</th>
                <th>Display Order</th>
                <th>Category</th>
                <th>Level</th>
                <th>Weight</th>
                <th>floor verification</th>
                <th></th>
                </tr>
                 </thead>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['question_List']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total']);
?>
                <tbody>
                <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['question_List']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['question_ID'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['question_List']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['type'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['question_List']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['question'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['question_List']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['question_guide'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['question_List']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['question_display'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['question_List']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['category'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['question_List']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['level'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['question_List']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['question_weight'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['question_List']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['question_floor_verif'];?>
</td>          
                <td> <a href='../question/displayEditQuestion.php?id=<?php echo $_smarty_tpl->tpl_vars['question_List']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['question_ID'];?>
&quest=<?php echo $_smarty_tpl->tpl_vars['question_List']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['quest_ID'];?>
&cat=<?php echo $_smarty_tpl->tpl_vars['question_List']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['category'];?>
&lev=<?php echo $_smarty_tpl->tpl_vars['question_List']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['level'];?>
 &floor=<?php echo $_smarty_tpl->tpl_vars['question_List']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['question_floor_verif'];?>
'><input class="btn btn-default" type="submit" name="editQuestion" value="edit"></a> </td>
                  </tr>
               <?php endfor; endif; ?>
               </tbody>
              </table>

           </div>  <!-- row clearfix -->


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
