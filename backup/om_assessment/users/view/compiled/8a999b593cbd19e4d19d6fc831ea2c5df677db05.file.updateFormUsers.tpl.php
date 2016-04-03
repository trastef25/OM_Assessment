<?php /* Smarty version Smarty-3.1.16, created on 2014-05-04 00:52:28
         compiled from "..\users\view\updateFormUsers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1434153658f4ceddf74-14637550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a999b593cbd19e4d19d6fc831ea2c5df677db05' => 
    array (
      0 => '..\\users\\view\\updateFormUsers.tpl',
      1 => 1399146566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1434153658f4ceddf74-14637550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userUpdate' => 0,
    'userNameErr' => 0,
    'teamsInfo' => 0,
    'team' => 0,
    'roles' => 0,
    'role' => 0,
    'PositionErr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53658f4d258e05_55529738',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53658f4d258e05_55529738')) {function content_53658f4d258e05_55529738($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h1 contenteditable="true">Users section <small>Update a user</small></h1>
                  </div>
                </div><!-- end view-->

              <div class="preview">Please fill up the next require information:</div>
              <br>
              
              <div class="view">
              <<?php ?>?php require("users/controller/updateUsersController.php");?<?php ?>>
              <form class="form-horizontal" role="form" method="POST" action="../users/updatingUser.php">

              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['x'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['x']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['name'] = 'x';
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['userUpdate']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['x']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['x']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['x']['total']);
?>
                <div class="form-group">
                  <label for="inputUsername" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputUsername" value="<?php echo $_smarty_tpl->tpl_vars['userUpdate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['users_name'];?>
" name="inputUsername">
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['userNameErr']->value;?>
</span>
                  </div>
                </div>
                 
                <div class="form-group">
                  <label for="inputuserTeam" class="col-sm-2 control-label">Team</label>
                  <div class="col-sm-5">
                      <select  class="form-control" name="userTeam">
                      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ti'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ti']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['name'] = 'ti';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['teamsInfo']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['total']);
?> 
                         <?php if ($_smarty_tpl->tpl_vars['teamsInfo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ti']['index']]['team_name']==$_smarty_tpl->tpl_vars['team']->value) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['teamsInfo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ti']['index']]['team_name'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['teamsInfo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ti']['index']]['team_name'];?>
</option>
                         <?php } else { ?>
                           <option value="<?php echo $_smarty_tpl->tpl_vars['teamsInfo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ti']['index']]['team_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['teamsInfo']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ti']['index']]['team_name'];?>
</option>
                          <?php }?>
                     <?php endfor; endif; ?>
                      </select>
                  </div> 
                </div>

                <div class="form-group">
                  <label for="inputUserRole" class="col-sm-2 control-label">Role</label>
                  <div class="col-sm-5">
                      <select  class="form-control" name="inputUserRole">
                      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rol'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rol']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['name'] = 'rol';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['roles']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rol']['total']);
?> 
                      <?php if ($_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rol']['index']]['role_name']==$_smarty_tpl->tpl_vars['role']->value) {?>
                           <option value="<?php echo $_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rol']['index']]['role_ID'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rol']['index']]['role_name'];?>
</option>
                      <?php } else { ?>
                           <option value="<?php echo $_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rol']['index']]['role_ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rol']['index']]['role_name'];?>
</option>
                      <?php }?>
                      <?php endfor; endif; ?>
                      </select>
                  </div>
                </div>

                  <div class="form-group">
                  <label for="inputUserPosition" class="col-sm-2 control-label">Position</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputUserPosition" value="<?php echo $_smarty_tpl->tpl_vars['userUpdate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['user_position'];?>
" name="inputUserPosition">
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['PositionErr']->value;?>
</span>
                  </div>
                </div>
          
                <div class="form-group">
                    <label for="lblFloorVerification" class="col-sm-2 control-label">Status:</label>
       
                 <?php if ($_smarty_tpl->tpl_vars['userUpdate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['user_status']=='A'||$_smarty_tpl->tpl_vars['userUpdate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['x']['index']]['user_status']=='a') {?>
                     <div class="col-sm-2">
                        <div class="radio">
                          <label> <input input type="radio" name="userStatus" value="A" checked>Active </label>
                        </div>
                      </div>
                       <div class="col-sm-3">
                          <div class="radio">
                          <label><input type="radio" name="userStatus" value="I" >Inactive</label>
                          </div>
                       </div>
                  <?php } else { ?>
                       <div class="col-sm-2">
                        <div class="radio">
                          <label> <input input type="radio" name="userStatus" value="A">Active </label>
                        </div>
                      </div>
                       <div class="col-sm-3">
                          <div class="radio">
                          <label><input type="radio" name="userStatus" value="I" checked>Inactive</label>
                          </div>
                       </div>
                  <?php }?>
                  <?php endfor; endif; ?> 
                </div>
            
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-5">
                    <button type="submit" class="btn btn-info">UPDATE</button>
                  </div>
                </div>
              </form>
               <a href=" displayUsersIndex.php"><button name="backPrioBtn" id="backUBtnUser" class="btn btn-danger"> CANCEL</button><a>
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
