<?php
	//INCLUDE LIBS
	include("config.php");
	require('Smarty/libs/Smarty.class.php');
	//END INCLUDE LIBS
	
	$hMySQLServer = mysql_connect($sDBServer, $sDBAccount, $sDBPassword);
	mysql_select_db($sDBName, $hMySQLServer);
	
	$hRes = mysql_query("SELECT * FROM articles WHERE id = '1' LIMIT 1;");
	$aData = mysql_fetch_array($hRes, MYSQL_ASSOC);
		
	
	$oSmarty = new Smarty;
	
	$oSmarty->debugging = false;
	
	/* Old Source 
	$oSmarty->assign("hptitle", "Meine Homepage!");
	
	$oSmarty->assign("aProjects",array("1","2","3","4","5","und so weiter..."));
	
	$oSmarty->assign("sProjectNames",array("PLATZHALTER","...",));
	*/
	
	$oSmarty->assign("sTitle", $aData['title']);
	$oSmarty->assign("sText", $aData['text']);
	
	$oSmarty->display("index.tpl");
?>