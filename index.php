<?php
	//INCLUDE LIBS
	include("config.php");
	require('Smarty/libs/Smarty.class.php');
	//END INCLUDE LIBS
	
	$hMySQLServer = mysql_connect($sDBServer, $sDBAccount, $sDBPassword);
	mysql_select_db($sDBName, $hMySQLServer);
	
	$avInfo_Title = Array();
	$avInfo_ProjectID = Array();
	$avInfo_Date = Array();
	$avInfo_Time = Array();
	$avInfo_Links = Array();
	$avInfo_ProjectName = Array();
	
	$aiProjectCounter = Array();
	$hRes = mysql_query("SELECT title, projectid, date, time FROM articles ORDER BY projectid ASC;");
	
	$iDataCounter = 0;
	
	while($aData = mysql_fetch_array($hRes, MYSQL_ASSOC))
	{
		$avInfo_Title[$iDataCounter] = $aData['title'];
		$avInfo_ProjectID[$iDataCounter] = $aData['projectid'];
		$avInfo_Date[$iDataCounter] = $aData['date'];
		$avInfo_Time[$iDataCounter] = $aData['time'];
		$hProjectInfo = mysql_query("SELECT * FROM projects WHERE projectid = '" . $aData['projectid'] . "';");
		$aProjectInfo = mysql_fetch_array($hProjectInfo, MYSQL_ASSOC) or die("ERR");
		$avInfo_ProjectName[$iDataCounter] = $aProjectInfo['name'];
		
		if(@$aiProjectCounter[$aData['projectid']] == NULL)
		{
			$aiProjectCounter[$aData['projectid']] = 1;
		}
		
		$avInfo_Links[$iDataCounter] = $aData['projectid'] . "_" . $aiProjectCounter[$aData['projectid']]++;
		$iDataCounter++;
	}
		
	$aProjectsOrdered = Array();
	
	$sQuery = "SELECT * FROM articles ORDER BY projectid ASC;";
	$hRes = mysql_query($sQuery);
	while($aData = mysql_fetch_array($hRes, MYSQL_ASSOC))
	{
		// if($aProjectsOrdered[$aData['projectid']] == NULL)
		// {
			// $vTemp = $aProjectsOrdered[$aData['projectid']];
			// $sQuery2 = "SELECT title FROM articles WHERE projectid ='" . $aDatas . "';";
			// $hRes2 = mysql_query($sQuery2);
			// $iCounter = 0;
			// while($aData2 = mysql_fetch_array($hRes2, MYSQL_ASSOC)){
				// $vTemp[iCounter] = $aData2[iCounter];
				// $iCounter++;
			// }
		// }//I dont get dat shit!!!
	}
		
	$oSmarty = new Smarty;
	
	$oSmarty->debugging = false;
	$oSmarty->caching = false;
 
	$oSmarty->assign("avInfo_Title", $avInfo_Title);
	$oSmarty->assign("avInfo_ProjectID", $avInfo_ProjectID);
	$oSmarty->assign("avInfo_ProjectName", $avInfo_ProjectName);
	$oSmarty->assign("avInfo_Links", $avInfo_Links);
	
	if(!isset($_GET['page']))
	{
		$oSmarty->assign("sTitle", "");
		$oSmarty->assign("sText", "");
	}
	else
	{
		$aPageData = @split("_", $_GET['page']);
		$sQuery = "SELECT * FROM articles WHERE projectid = '" . mysql_real_escape_string($aPageData[0]) . "';";
		$hRes = mysql_query($sQuery);
		for($i = 0; $i < $aPageData[1]; $i++)
		{
				$aData = mysql_fetch_array($hRes, MYSQL_ASSOC);
		}
		
		
		$oSmarty->assign("sTitle", $aData['title']);
		$oSmarty->assign("sText", $aData['text']);
	}

	
	$oSmarty->display("index.tpl");
?>