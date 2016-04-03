<?php /* Smarty version Smarty-3.1.16, created on 2014-05-02 15:52:19
         compiled from "..\team\view\updatedFormTeamViewIndex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1615342b458924844-53896954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd687a078a4afc2c9207028182908ec8f2f83189' => 
    array (
      0 => '..\\team\\view\\updatedFormTeamViewIndex.tpl',
      1 => 1399045935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1615342b458924844-53896954',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5342b458b4ac96_87667566',
  'variables' => 
  array (
    'teamsInfoByID' => 0,
    'IdErr' => 0,
    'TeamNameErr' => 0,
    'DateErr' => 0,
    'LocalErr' => 0,
    'RegionErr' => 0,
    'CapabilityErr' => 0,
    'ProcessErr' => 0,
    'FocalErr' => 0,
    'ContractErr' => 0,
    'ClientErr' => 0,
    'DMErr' => 0,
    'OEErr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342b458b4ac96_87667566')) {function content_5342b458b4ac96_87667566($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h1 contenteditable="true">Team section <small>Update a team</small></h1>
                  </div>
                </div><!-- end view-->

              <div class="preview">Please fill up the next require information:</div>
              <br>

              
              <div class="view">

              <<?php ?>?php require("team/controller/teamUpdatedController.php");?<?php ?>>
              <form class="form-horizontal" role="form" method="POST" action="../team/editTeamIndex.php">
             

              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ti'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ti']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['name'] = 'ti';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ti']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['teamsInfoByID']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                <div class="form-group">
                  <label for="inputIDTeam" class="col-sm-2 control-label">ID</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" id="inputIdTeam" name="inputIdTeam"  value="<?php echo $_smarty_tpl->tpl_vars['teamsInfoByID']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ti']['index']]['team_ID'];?>
" readonly>
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['IdErr']->value;?>
</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamName" class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputTeamName" name="inputTeamName" value="<?php echo $_smarty_tpl->tpl_vars['teamsInfoByID']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ti']['index']]['team_name'];?>
">
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['TeamNameErr']->value;?>
</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamCreationDate" class="col-sm-2 control-label">Creation date</label>
                  <div class="col-sm-5">
                    <input type="date" class="form-control" id="inputTeamCreationDate" name="inputTeamCreationDate"value="<?php echo $_smarty_tpl->tpl_vars['teamsInfoByID']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ti']['index']]['team_creation_date'];?>
">
                     <span class="error"><?php echo $_smarty_tpl->tpl_vars['DateErr']->value;?>
</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamLocalization" class="col-sm-2 control-label">Localization</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputTeamLocalization" name="inputTeamLocalization"value="<?php echo $_smarty_tpl->tpl_vars['teamsInfoByID']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ti']['index']]['team_localization'];?>
">
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['LocalErr']->value;?>
</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamRegion" class="col-sm-2 control-label">Region</label>
                  <div class="col-sm-5">
                   <input type="text" class="form-control" id="inputTeamRegion" name="inputTeamRegion"value="<?php echo $_smarty_tpl->tpl_vars['teamsInfoByID']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ti']['index']]['team_region'];?>
">
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['RegionErr']->value;?>
</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamCapability" class="col-sm-2 control-label">Capability</label>
                  <div class="col-sm-5">
                   <input type="text" class="form-control" id="inputTeamCapability" name="inputTeamCapability"value="<?php echo $_smarty_tpl->tpl_vars['teamsInfoByID']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ti']['index']]['team_capability'];?>
">
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['CapabilityErr']->value;?>
</span>                 
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputTeamProcess" class="col-sm-2 control-label">Process</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputTeamProcess" name="inputTeamProcess"value="<?php echo $_smarty_tpl->tpl_vars['teamsInfoByID']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ti']['index']]['team_process'];?>
">
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['ProcessErr']->value;?>
</span>               
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamFocal" class="col-sm-2 control-label">Focal</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputTeamFocal" name="inputTeamFocal"value="<?php echo $_smarty_tpl->tpl_vars['teamsInfoByID']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ti']['index']]['team_focal'];?>
">
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['FocalErr']->value;?>
</span>                
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputTeamContract" class="col-sm-2 control-label">Contract</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputTeamContract" name="inputTeamContract"value="<?php echo $_smarty_tpl->tpl_vars['teamsInfoByID']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ti']['index']]['team_contract'];?>
">
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['ContractErr']->value;?>
</span>                   
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamClient" class="col-sm-2 control-label">Client</label>
                  <div class="col-sm-5">
                    <input type="Text" class="form-control" id="inputTeamClient" name="inputTeamClient"value="<?php echo $_smarty_tpl->tpl_vars['teamsInfoByID']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ti']['index']]['team_client'];?>
">
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['ClientErr']->value;?>
</span>                 
                  </div>
                </div>

               <div class="form-group">
                  <label for="inputTeamDM" class="col-sm-2 control-label">DM</label>
                  <div class="col-sm-5">
                    <input type="Text" class="form-control" id="inputTeamDM" name="inputTeamDM"value="<?php echo $_smarty_tpl->tpl_vars['teamsInfoByID']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ti']['index']]['team_dm'];?>
">
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['DMErr']->value;?>
</span>                
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputTeamOEContact" class="col-sm-2 control-label">OE Contact</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputTeamOEContact" name="inputTeamOEContact"value="<?php echo $_smarty_tpl->tpl_vars['teamsInfoByID']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ti']['index']]['team_oe'];?>
">
                    <span class="error"><?php echo $_smarty_tpl->tpl_vars['OEErr']->value;?>
</span>                  
                  </div>
                </div>
 
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-5">
                    <button type="submit" class="btn btn-info">UPDATE</button>
                  </div>
                </div>
                <?php endfor; endif; ?>
              </form>
               <a href=" displayTeamIndex.php"><button name="backPrioBtn" id="backBtnUTeam" class="btn btn-danger"> CANCEL</button><a>
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
