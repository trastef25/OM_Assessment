<?php /* Smarty version Smarty-3.1.16, created on 2014-03-08 00:34:11
         compiled from "..\home\view\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11842531915c2a03e38-62135167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66dc30e667b77364e278ac51e6c8124978f874b1' => 
    array (
      0 => '..\\home\\view\\index.tpl',
      1 => 1394238850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11842531915c2a03e38-62135167',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531915c2ca67c8_94113973',
  'variables' => 
  array (
    'LISTA_PREGUNTAS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531915c2ca67c8_94113973')) {function content_531915c2ca67c8_94113973($_smarty_tpl) {?><!DOCTYPE html>
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
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="../help">Instruccions</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview</a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Assessments</a></li>
            <li><a href="#">Accion Plans</a></li>
          </ul>
          <ul class="nav nav-sidebar">
              <li class="active"><a href="#">OM tools</a></li>
            <li><a href="">Assessments</a></li>
            <li><a href="">Reports</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Maintenance</a></li>
            <li><a id="mat_lev">Maturity Level</a></li>
            <li><a id="li_question">Question</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
       </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      

  <div id="mainContent">
       <div class="panel panel-default" > <!-- Default panel contents -->
    
            <form  class="form-inline" role="form">

              <div class="form-group">
                    <label for="lbl_ques_questType" class="col-sm-2 control-label">Questionary Type:</label>
                     <div class="col-sm-3">
                    <select  class="form-control  moveLeft" name="quetype">
                      <option value="0"></option>
                      <option value="1">OM Maturity</option>
                      <option value="2">QA</option>
                    </select>
                     </div>
                </div>

                 <div class="form-group">
                     <label for="quesMatCat" class="col-sm-2 control-label">Maturity Category:</label>
                       <div class="col-sm-3">
                      <select  class="form-control moveLeft" name="matCat">
                        <option value="0"></option>
                        <option value="1">Focus</option>
                        <option value="2">Standardize</option>
                        <option value="3">Plan</option>
                        <option value="4">Organize</option>
                        <option value="5">Visualize</option>
                        <option value="6">Improve</option>
                      </select>
                       </div>
                  </div>

                 <div class="form-group">
                         <label for="quesMatLevel" class="col-sm-2 control-label">Maturity Level:</label>
                       <div class="col-sm-3">
                      <select  class="form-control moveLeft" name="matLev">
                        <option value="0"></option>
                        <option value="1">Not Stable</option>
                        <option value="2">Stable</option>
                        <option value="3">Capable</option>
                        <option value="4">Optimized Gen4</option>
                      </select>
                       </div>
                  </div>
                  <br>
                  <input class="btn btn-default "   name= "addQuestion" value="Add Question"> 
                  <br>
            </form>
        
       </div><!-- end panel default-->

      <<?php ?>?php require_once("question/controller/c_question.php"); ?<?php ?>>

            <table class="table table-striped table-condensed">
            <tr>
            <th>ID</th>
            <th>Questionary</th>
            <th class="spantd">Question</th>
            <th>Guidelines</th>
            <th>Display Order</th>
            <th>Category</th>
            <th>Level</th>
            <th>Weight</th>
            <th>floor verification</th>
            <th></th>
            </tr>
          
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_PREGUNTAS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
            <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['LISTA_PREGUNTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['question_ID'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['LISTA_PREGUNTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['type'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['LISTA_PREGUNTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['question'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['LISTA_PREGUNTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['question_guide'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['LISTA_PREGUNTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['question_display'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['LISTA_PREGUNTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['category'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['LISTA_PREGUNTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['level'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['LISTA_PREGUNTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['question_weight'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['LISTA_PREGUNTAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['question_floor_verif'];?>
</td>
            <td><input class="btn btn-default" type="submit" name="editQuestion" value="edit"> </td>
            </tr>
            <?php endfor; endif; ?>
             
          </table>

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
