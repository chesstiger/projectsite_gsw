<?php /* Smarty version Smarty-3.1.14, created on 2013-07-16 12:32:46
         compiled from "index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:614751e4ec1aa40071-68182786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e43b807af9cc8df7d350c3baf9e47f167c9520a0' => 
    array (
      0 => 'index.tpl',
      1 => 1373970760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '614751e4ec1aa40071-68182786',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51e4ec1aa90349_44885767',
  'variables' => 
  array (
    'avInfo_Title' => 0,
    'avInfo_ProjectID' => 0,
    'avInfo_ProjectName' => 0,
    'sTitle' => 0,
    'sText' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e4ec1aa90349_44885767')) {function content_51e4ec1aa90349_44885767($_smarty_tpl) {?><html>
	<head>
		<script type = "text/javascript" src = "http://code.jquery.com/jquery-1.10.2.js"></script>
		<script type = "text/javascript">
	
		$(document).ready(function()
			{
				$("#openMenu").click(function()
					{
						$("#menu").slideToggle(200);
					}
				);
			
				$(".subButton").click(showSideBar);				
				function showSideBar()
					{
						/*$("#sidebar").animate({ 
							Top: "=" + $(".subButton").css("Top") + "px",
						}, 1000 );*/
						//alert($(this).position().top);
						//$("#sidebar").css("marginTop", $(this).css("marginTop"));
						iIDNum = $(this).attr("id").substr(9);
						
						$("#sidebar" + iIDNum).css("top", $(this).offset().top - 9);
						//$("#sidebar").show(-1);
						$("#sidebar" + iIDNum).css("display", "block");
						$(this).click(hideSideBar);
					}
				function hideSideBar()
					{
						//$("#sidebar").hide(-1);
						iIDNum = $(this).attr("id").substr(9);
						
						$("#sidebar" + iIDNum).css("display", "none");
						$(this).click(showSideBar);
					}
					
							
			
			
			}
		);
		
		</script>
		
		<link rel="stylesheet" type="text/css" href="design.css">
	
		</style>
	</head>
	
	<body bgcolor = "AAFFAA">
	<div id = "menu">
		<div class = "bla">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['name'] = 'sTitle_loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['avInfo_Title']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sTitle_loop']['total']);
?> 
						<div class="subButton" id="subbutton<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sTitle_loop']['index'];?>
" onclick="">Projekt <?php echo $_smarty_tpl->tpl_vars['avInfo_ProjectID']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sTitle_loop']['index']];?>
 <br> <?php echo $_smarty_tpl->tpl_vars['avInfo_ProjectName']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sTitle_loop']['index']];?>
</div><br>
			<?php endfor; endif; ?>
		</div>
		<br><br>
		
	</div>
	
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['name'] = 'sidebar';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['avInfo_Title']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['total']);
?>
		<div class="sidebar" id="sidebar<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sidebar']['index'];?>
" style="display: none;">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['name'] = 'sidebar';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['avInfo_Title']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sidebar']['total']);
?>
			<?php endfor; endif; ?>
		</div> 
	<?php endfor; endif; ?>
	<div id = "openMenu">
	<font size = "6" color = "FFFFFF">
			Projekte
	</font>
	</div>
	
	<div id = "title">
	<font size = "6" color = "FFFFFF">
			Homepage der Projektwoche
	</font>
	</div>
	
	<div id="projekt" style="color: white;">
		<span style="font-size: 64;">
			<center><?php echo $_smarty_tpl->tpl_vars['sTitle']->value;?>
</center><br>
		</span>
		<span style="font-size: 16;">
			<?php echo $_smarty_tpl->tpl_vars['sText']->value;?>

		</span>
	</div>
	
	
	</body>
</html><?php }} ?>