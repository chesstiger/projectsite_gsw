<html>
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
			{section name=sTitle_loop loop=$avInfo_Title} 
						<div class="subButton" id="subbutton{$smarty.section.sTitle_loop.index}" onclick="">Projekt {$avInfo_ProjectID[sTitle_loop]} <br> {$avInfo_ProjectName[sTitle_loop]}</div><br>
			{/section}
		</div>
		<br><br>
		
	</div>
	
	{section name=sidebar loop=$avInfo_Title}
		<div class="sidebar" id="sidebar{$smarty.section.sidebar.index}" style="display: none;">
			{section name=sidebar loop=$avInfo_Title}
			{/section}
		</div> 
	{/section}
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
			<center>{$sTitle}</center><br>
		</span>
		<span style="font-size: 16;">
			{$sText}
		</span>
	</div>
	
	
	</body>
</html>