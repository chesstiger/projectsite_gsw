<?php /* Smarty version Smarty-3.1.14, created on 2013-07-15 12:38:27
         compiled from "index.html" */ ?>
<?php /*%%SmartyHeaderCode:2830251e3d123bd08a8-73607069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6013a00b362253c64368d6eebc50ea2131754e2' => 
    array (
      0 => 'index.html',
      1 => 1373885094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2830251e3d123bd08a8-73607069',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sTitle' => 0,
    'sText' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51e3d123d0dc10_63273074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e3d123d0dc10_63273074')) {function content_51e3d123d0dc10_63273074($_smarty_tpl) {?><html>
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
			}
		);
		
		</script>
		
		<style = "text/css">
			#openMenu 
				{
					width:200;
					height:40px;
					background:#002211;
					color:black;
					position:absolute;
					top:10px;
					left:10px;
					font-size:16px;
					text-align:center;
					cursor:pointer;
					
				}
			
			
			
			#menu
				{
					width:200px;
					background:#00331A;
					position:absolute;
					top:60px;
					left:10;
					text-align:center;
					display:none;
					bottom: 10px;
					z-index: 2;
					overflow-y: scroll;
				}
			
			#menu p
				{
					color:green;
					padding:15px;
					text-align:justify;
					z-index: 2;
				}
			
			#projekt
				{
					position: absolute;
					background: #006600;
					left: 10px;
					right: 10px;
					top: 60px;
					bottom: 10px;
					z-index: 1;
					
				}
			
			.bla
				{
					position: absolute;
					top: 10;
					left: 10;
					right: 10;
					bottom: 10;
					
				}
				
			#title 
				{
					right: 10px;
					height:40px;
					left: 220px;
					background:#002211;
					color:black;
					position:absolute;
					top:10px;
					font-size:16px;
					text-align:center;
					
				}

		</style>
	</head>
	
	<body bgcolor = "AAFFAA">
	<div id = "menu">
		<bla class = "bla">
			<div id = "link1" style = "background: #AAFFAA; cursor: pointer;"></div>
		
		<br><br>
	
			<div id = "link1" style = "background: #AAFFAA; cursor: pointer;">platzhalter</div>
		
		<br><br>
		<div id = "link1" style = "background: #AAFFAA; cursor: pointer;">platzhalter</div>
		
		<br><br>
		<div id = "link1" style = "background: #AAFFAA; cursor: pointer;">platzhalter</div>
		
		<br><br>
		<div id = "link1" style = "background: #AAFFAA; cursor: pointer;">platzhalter</div>
		
		<br><br>
		<div id = "link1" style = "background: #AAFFAA; cursor: pointer;">platzhalter</div>
		
		<br><br>
		<div id = "link1" style = "background: #AAFFAA; cursor: pointer;">platzhalter</div>
		
		<br><br>
		<div id = "link1" style = "background: #AAFFAA; cursor: pointer;">platzhalter</div>
		
		<br><br>
		<div id = "link1" style = "background: #AAFFAA; cursor: pointer;">platzhalter</div>
		
		<br><br>
		<div id = "link1" style = "background: #AAFFAA; cursor: pointer;">platzhalter</div>
		
		<br><br>
		<div id = "link1" style = "background: #AAFFAA; cursor: pointer;">platzhalter</div>
		
		<br><br>
		<div id = "link1" style = "background: #AAFFAA; cursor: pointer;">platzhalter</div>
		
		<br><br>
		<div id = "link1" style = "background: #AAFFAA; cursor: pointer;">platzhalter</div>
		
		<br><br>
		<div id = "link1" style = "background: #AAFFAA; cursor: pointer;">platzhalter</div>
		
		<br><br>
		<div id = "link1" style = "background: #AAFFAA; cursor: pointer;">platzhalter</div>
		
		<br><br>
		<div id = "link1" style = "background: #AAFFAA; cursor: pointer;">platzhalter</div>
		
		<br><br>
		<div id = "link1" style = "background: #AAFFAA; cursor: pointer;">platzhalter</div>
		
		<br><br>
		<div id = "link1" style = "background: #AAFFAA; cursor: pointer;">platzhalter</div>
		
		<br><br>
		<div id = "link1" style = "background: #AAFFAA; cursor: pointer;">platzhalter</div>
		
		<br><br>
		<div id = "link1" style = "background: #AAFFAA; cursor: pointer;">platzhalter</div>
		
		<br><br>
		<div id = "link1" style = "background: #AAFFAA; cursor: pointer;">platzhalter</div>
		
		<br><br>
		</bla>
		<br><br>
		
	</div>
	
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
	
	<div id = "projekt">
	<font color = "FFFFFF" size = "1000">
	<center><?php echo $_smarty_tpl->tpl_vars['sTitle']->value;?>
</center>
	<?php echo $_smarty_tpl->tpl_vars['sText']->value;?>

	</font>
	</div>
	
	
	</body>
</html><?php }} ?>