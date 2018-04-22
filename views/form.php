<?php


// invoke autoload to get access to the propel generated models
require_once 'vendor/autoload.php';

// require the config file that propel init created with your db connection information
require_once 'generated-conf/config.php';

// now this script can access the database through the propel models!

// retreive a person by id and print their name
// note that the getters were generated based on the db col names first_name and last_name

$p = InvestorsQuery::create()->findPk(1);
echo "<p>".$p->getlname().", ".$p->getfname()."</p>";

// retrieve a person by last name
$p = InvestorsQuery::create()->filterBylname("gates")->findOne();
echo "<p>".$p->getlname().", ".$p->getfname()."</p>";

// add a new person to the database (every time you reload this page)
$p = new Investors();
$p->setfname("Test");
$p->setlname("Guy");
$p->save();

echo "<p>Saved ".$p->getlname().", ".$p->getfname()." with ID ".$p->getId()."</p>";

?>