<?php /* Smarty version Smarty-3.1.16, created on 2014-05-02 14:28:35
         compiled from "view\addFormTeamViewIndex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:217645341ddd6757cf3-01239926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da0ff42e4f05dd350360f62ddedeff7c8f0ee379' => 
    array (
      0 => 'view\\addFormTeamViewIndex.tpl',
      1 => 1399040900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217645341ddd6757cf3-01239926',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5341ddd6868688_95786316',
  'variables' => 
  array (
    'maxIDTeam' => 0,
    'maxID' => 0,
    'id' => 0,
    'IdErr' => 0,
    'teamName' => 0,
    'TeamNameErr' => 0,
    'teamCreationDate' => 0,
    'DateErr' => 0,
    'teamLocalization' => 0,
    'LocalErr' => 0,
    'teamRegion' => 0,
    'RegionErr' => 0,
    'teamCapability' => 0,
    'CapabilityErr' => 0,
    'teamProcess' => 0,
    'ProcessErr' => 0,
    'teamFocal' => 0,
    'FocalErr' => 0,
    'teamContract' => 0,
    'ContractErr' => 0,
    'teamClient' => 0,
    'ClientErr' => 0,
    'teamDM' => 0,
    'DMErr' => 0,
    'teamOEContact' => 0,
    'OEErr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5341ddd6868688_95786316')) {function content_5341ddd6868688_95786316($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h1 contenteditable="true">Team section <small>Create a new team</small></h1>
                  </div>
                </div><!-- end view-->

              <div class="preview">Please fill up the next require information:</div>
              <br>

              
              <div class="view">

              <form class="form-horizontal" role="form" method="POST" action="../team/addTeamIndex.php">


                <div class="form-group">
                  <label for="inputIDTeam" class="col-sm-2 control-label">ID</label>
                  <div class="col-sm-3">
                   <?php  $_smarty_tpl->tpl_vars['maxID'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['maxID']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['maxIDTeam']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['maxID']->key => $_smarty_tpl->tpl_vars['maxID']->value) {
$_smarty_tpl->tpl_vars['maxID']->_loop = true;
?> 
                   <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['maxID']->value[$_smarty_tpl->getVariable('smarty')->value['section']['team_ID']['index']]+1, null, 0);?>
                    <input type="text" class="form-control" id="inputIdTeam" name="inputIdTeam" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" readonly>
                   <?php } ?>
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['IdErr']->value;?>
</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamName" class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputTeamName" value="<?php echo $_smarty_tpl->tpl_vars['teamName']->value;?>
" name="inputTeamName">
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['TeamNameErr']->value;?>
</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamCreationDate" class="col-sm-2 control-label">Creation date</label>
                  <div class="col-sm-5">
                    <input type="date" class="form-control" id="inputTeamCreationDate" value="<?php echo $_smarty_tpl->tpl_vars['teamCreationDate']->value;?>
" name="inputTeamCreationDate">
                     <span class="error"><?php echo $_smarty_tpl->tpl_vars['DateErr']->value;?>
</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamLocalization" class="col-sm-2 control-label">Localization</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputTeamLocalization" value="<?php echo $_smarty_tpl->tpl_vars['teamLocalization']->value;?>
" name="inputTeamLocalization">
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['LocalErr']->value;?>
</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamRegion" class="col-sm-2 control-label">Region</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputTeamRegion" value="<?php echo $_smarty_tpl->tpl_vars['teamRegion']->value;?>
" name="inputTeamRegion">
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['RegionErr']->value;?>
</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamCapability" class="col-sm-2 control-label">Capability</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputTeamCapability" value="<?php echo $_smarty_tpl->tpl_vars['teamCapability']->value;?>
"  name="inputTeamCapability">
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['CapabilityErr']->value;?>
</span>                 
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputTeamProcess" class="col-sm-2 control-label">Process</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputTeamProcess" value="<?php echo $_smarty_tpl->tpl_vars['teamProcess']->value;?>
"name="inputTeamProcess">
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['ProcessErr']->value;?>
</span>               
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamFocal" class="col-sm-2 control-label">Focal</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputTeamFocal" value="<?php echo $_smarty_tpl->tpl_vars['teamFocal']->value;?>
" name="inputTeamFocal">
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['FocalErr']->value;?>
</span>                
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputTeamContract" class="col-sm-2 control-label">Contract</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputTeamContract" value="<?php echo $_smarty_tpl->tpl_vars['teamContract']->value;?>
" name="inputTeamContract">
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['ContractErr']->value;?>
</span>                   
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamClient" class="col-sm-2 control-label">Client</label>
                  <div class="col-sm-5">
                    <input type="Text" class="form-control" id="inputTeamClient" value="<?php echo $_smarty_tpl->tpl_vars['teamClient']->value;?>
" name="inputTeamClient">
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['ClientErr']->value;?>
</span>                 
                  </div>
                </div>

               <div class="form-group">
                  <label for="inputTeamDM" class="col-sm-2 control-label">DM</label>
                  <div class="col-sm-5">
                    <input type="Text" class="form-control" id="inputTeamDM" value="<?php echo $_smarty_tpl->tpl_vars['teamDM']->value;?>
" name="inputTeamDM">
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['DMErr']->value;?>
</span>                
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamOEContact" class="col-sm-2 control-label">OE Contact</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputTeamOEContact" value="<?php echo $_smarty_tpl->tpl_vars['teamOEContact']->value;?>
" name="inputTeamOEContact">
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['OEErr']->value;?>
</span>                  
                  </div>
                </div>
 
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-5">
                    <button type="submit" class="btn btn-info">ADD</button>
                  </div>
                </div>

              </form>
               <a href=" index.php"><button name="backPrioBtn" id="backBtnTeam" class="btn btn-danger"> CANCEL</button><a>
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
