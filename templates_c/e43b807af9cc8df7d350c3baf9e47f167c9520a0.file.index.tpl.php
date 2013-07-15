<?php /* Smarty version Smarty-3.1.14, created on 2013-07-15 12:32:59
         compiled from "index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:647651e3c770e90c35-59881966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e43b807af9cc8df7d350c3baf9e47f167c9520a0' => 
    array (
      0 => 'index.tpl',
      1 => 1373884614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '647651e3c770e90c35-59881966',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51e3c77105e2a2_99360131',
  'variables' => 
  array (
    'hptitle' => 0,
    'aProjects' => 0,
    'sTitle' => 0,
    'sText' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e3c77105e2a2_99360131')) {function content_51e3c77105e2a2_99360131($_smarty_tpl) {?><!-- Hello, this is: <?php echo $_smarty_tpl->tpl_vars['hptitle']->value;?>
 !
Die Projekte sind : <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['name'] = 'sProjects';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['aProjects']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sProjects']['total']);
?> 
						<?php echo $_smarty_tpl->tpl_vars['aProjects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sProjects']['index']];?>

					 <?php endfor; endif; ?>! -->
					 
<center><u><?php echo $_smarty_tpl->tpl_vars['sTitle']->value;?>
</u></center>
<i><?php echo $_smarty_tpl->tpl_vars['sText']->value;?>
</i><?php }} ?>