<?php /* Smarty version Smarty-3.1.16, created on 2014-05-04 02:59:59
         compiled from "..\users\view\roleIndex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1048253658f82c6ea25-50103826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1354b7ce5af5c25ab6df8b46a6080c7114d383a8' => 
    array (
      0 => '..\\users\\view\\roleIndex.tpl',
      1 => 1399172394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1048253658f82c6ea25-50103826',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53658f82e665f0_48203263',
  'variables' => 
  array (
    'maxID' => 0,
    'max' => 0,
    'id' => 0,
    'rolename' => 0,
    'roledescription' => 0,
    'IdErr' => 0,
    'roleErr' => 0,
    'descripErr' => 0,
    'roles' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53658f82e665f0_48203263')) {function content_53658f82e665f0_48203263($_smarty_tpl) {?><!DOCTYPE html>
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
   <div class="panel panel-default"> <!-- Default panel contents -->
       
    
       <h1 class="page-header marginleft"></h1>
        <h2 class="sub-header marginleft">Role</h2>
      
        <<?php ?>?php require("users/controller/displayRoleController.php");?<?php ?>>

        <form class="form-inline" role="form" action="../users/addRoleIndex.php" method="POST">
        
              <div class="form-group">
              <label class="marginleft">ID</label>
               <?php  $_smarty_tpl->tpl_vars['max'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['max']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['maxID']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['max']->key => $_smarty_tpl->tpl_vars['max']->value) {
$_smarty_tpl->tpl_vars['max']->_loop = true;
?> 
               <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['max']->value[$_smarty_tpl->getVariable('smarty')->value['section']['role_ID']['index']]+1, null, 0);?>
               <input name="idUserRole"  type="id_UserRole" class="form-control" id="id_UserRole"  value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" readonly>
               <?php } ?>
              </div>
       
              <div class="form-group">
              <label  class="marginleft" >Role</label>
              <input name="roleName"type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['rolename']->value;?>
" placeholder="Name">
              </div>

              <div class="form-group">
              <label class="marginleft">Description</label>              
               <span class="clearfix" ></span>
               <div class="col-sm-4">
               <textarea name="roleDesc" class="form-control" rows="2" cols="30"><?php echo $_smarty_tpl->tpl_vars['roledescription']->value;?>
</textarea>
               </div>
              </div>
              <button type="submit" name="addRoleBtn"class="btn btn-info "> ADD</button>
               <span class="clearfix" ></span>

               <span class="error"><?php echo $_smarty_tpl->tpl_vars['IdErr']->value;?>
</span>
               <span class="error"><?php echo $_smarty_tpl->tpl_vars['roleErr']->value;?>
</span>
               <span class="error"><?php echo $_smarty_tpl->tpl_vars['descripErr']->value;?>
</span>
              
        </form>
      <br><br>
  </div> <!-- end panel panel-default-->
  </div> <!-- end row clearfix-->
   <div class="row clearfix"> 
        <table class="table roleTable">
        <thead>
        <tr>
        <th>Id</th>
        <th>Role</th>
        <th>Description</th>
        <th></th>
        </tr>
        </thead>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rl'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['name'] = 'rl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['roles']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rl']['total']);
?>
         <tbody>
          <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rl']['index']]['role_ID'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rl']['index']]['role_name'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rl']['index']]['role_desc'];?>
</td>
          <td> <a href='../users/displayRoleUpdate.php?id=<?php echo $_smarty_tpl->tpl_vars['roles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['rl']['index']]['role_ID'];?>
'><input class="btn btn-default" type="submit" name="editQuestion" value="EDIT"></a> </td>
          </tr>
         </tbody>
          <?php endfor; endif; ?>
        </table>
 </div>

  
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
