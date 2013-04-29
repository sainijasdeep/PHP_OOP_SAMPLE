<?php 
    /* Page 3
  This is the Page which call the 2 classes and generates page out of them.
	*/
	$sRelPath = "";
	$sTitle = "Home page";
	require_once($sRelPath . "clsStorePage.php");
	require_once($sRelPath . "clsHome.php");
	
	$myPage = new clsHome( $sRelPath );
	$myPage->setTitle($sTitle);

	$myPage->compile();
	

?>
