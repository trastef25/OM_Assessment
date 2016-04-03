<?php /* Smarty version Smarty-3.1.16, created on 2014-04-13 18:55:43
         compiled from "..\assessment\view\boxResult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4518533cb31218caf7-91707894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc29a77c01baf47d97ec248bf9d7bc88b956825b' => 
    array (
      0 => '..\\assessment\\view\\boxResult.tpl',
      1 => 1397415340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4518533cb31218caf7-91707894',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_533cb312271274_75877655',
  'variables' => 
  array (
    'categoryType' => 0,
    'focusStatus' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533cb312271274_75877655')) {function content_533cb312271274_75877655($_smarty_tpl) {?> 
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
" value="<?php echo $_smarty_tpl->tpl_vars['focusStatus']->value;?>
" readonly> 
                <?php endfor; endif; ?>
 <?php }} ?>
