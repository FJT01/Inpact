<?php


// include models, including the database connection
	// invoke autoload to get access to the propel generated models
	require_once 'vendor/autoload.php';

	// require the config file that propel init created with your db connection information
	require_once 'generated-conf/config.php';


// using the Recipe model, retrieve an array of recipes
	$investors = InvestorsQuery::create()->find();
	// contains collection of objects
	// one object for every row of table
	//var_dump($recipes);



	$user = "Bob";
include_once( "views/home.php" );

?> 
