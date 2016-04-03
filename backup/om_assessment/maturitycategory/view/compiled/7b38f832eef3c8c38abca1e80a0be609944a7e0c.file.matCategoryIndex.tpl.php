<?php /* Smarty version Smarty-3.1.16, created on 2014-05-04 05:35:19
         compiled from "..\maturityCategory\view\matCategoryIndex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11540531dc6c7da1e36-19759144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b38f832eef3c8c38abca1e80a0be609944a7e0c' => 
    array (
      0 => '..\\maturityCategory\\view\\matCategoryIndex.tpl',
      1 => 1399181674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11540531dc6c7da1e36-19759144',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531dc6c80b5af4_38446597',
  'variables' => 
  array (
    'maxIDCat' => 0,
    'maxID' => 0,
    'id' => 0,
    'atype' => 0,
    'categorityErr' => 0,
    'CatMat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531dc6c80b5af4_38446597')) {function content_531dc6c80b5af4_38446597($_smarty_tpl) {?><!DOCTYPE html>
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
                   <h1 class="page-header marginleft"></h1>
                   <h2 class="sub-header marginleft">Categories</h2>

              <<?php ?>?php require("maturityCategority/controller/matCategoryController.php");?<?php ?>>
              <form class="form-inline" role="form" action="../maturityCategory/addCatIndex.php" method="post">

              <div class="form-group">
              <label class="marginleft">ID</label>
               <?php  $_smarty_tpl->tpl_vars['maxID'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['maxID']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['maxIDCat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['maxID']->key => $_smarty_tpl->tpl_vars['maxID']->value) {
$_smarty_tpl->tpl_vars['maxID']->_loop = true;
?> 
                <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['maxID']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mat_cat_ID']['index']]+1, null, 0);?>
              <input  type="id_level" class="form-control" id="id_level" name="id_cat" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" readonly>
               <?php } ?>
              </div>

              <div class="form-group">
              <label>Categority</label>
              <input  type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="cat_name">
              </div>

              <div class="form-group">
              <label>Assessment Type</label>
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
               <option value="<?php echo $_smarty_tpl->tpl_vars['atype']->value[$_smarty_tpl->getVariable('smarty')->value['section']['at']['index']]['quest_ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['atype']->value[$_smarty_tpl->getVariable('smarty')->value['section']['at']['index']]['quest_type'];?>
</option>
              <?php endfor; endif; ?>
              </select>
              </div>

              <button type="submit" class="btn btn-info "> ADD</button>
               <span class="clearfix" ></span>
               <br><br>
               <span class="error"><?php echo $_smarty_tpl->tpl_vars['categorityErr']->value;?>
</span> 
              </form>

           </div>  <!-- Default panel contents -->
           </div>  <!-- end row clearfix -->

       <div class="row clearfix">

        <table class="table catTable">
         <thead>
        <tr>
        <th>Id</th>
        <th>Categority</th>
        <th>Assessment Type</th>
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
          <td><?php echo $_smarty_tpl->tpl_vars['CatMat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cat']['index']]['quest_type'];?>
</td>
          <td> <a href='../maturityCategory/displayCat.php?id=<?php echo $_smarty_tpl->tpl_vars['CatMat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cat']['index']]['mat_cat_ID'];?>
&quest=<?php echo $_smarty_tpl->tpl_vars['CatMat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cat']['index']]['quest_type'];?>
'><input class="btn btn-default" type="submit" name="editCatMat" value="edit"></a> </td>
          </tr>
        <?php endfor; endif; ?>
            </tbody>
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
