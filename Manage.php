<?php
// invoke autoload to get access to the propel generated models
	require_once 'vendor/autoload.php';
// require the config file that propel init created with your db connection information
	require_once 'generated-conf/config.php';
// check for delete type (ingredient or unit) and id in the querystring
	$iVar = null; //item variable, any unit or any ingredient
	$cVar = null; //category variable, either ingredient or unit
	$error = -1; //for view_manage, to know which error to display 

	// if($_POST)
	// {
	// 	echo "Something was clicked!";
		
	// 	if( isset($_POST['add_fname']) )
	// 	{
	// 		echo $_POST['add_fname'];
	// 	}
		
	// 	if( isset($_POST['add_lname']) )
	// 	{
	// 		echo $_POST['add_lname'];
	// 	}
		
	// 	if( isset($_POST['add_url']) )
	// 	{
	// 		echo $_POST['add_url'];
	// 	}
	// 	echo "<br>";
	// 	//var_dump($_POST);
		
	// }
	
//On Post
	if($_POST)
	{

	// add a new person to the database (every time you reload this page)
	$p = new Investors();
	$p->setfname($_POST['add_fname']);
	$p->setlname($_POST['add_lname']);
	$p->seturl($_POST['add_url']);
	$p->save();

	//echo "<p>Saved ".$p->getlname().", ".$p->getfname()." with ID ".$p->geturl()."</p>";
		

	}

	
require_once("index.php");

?>

	
