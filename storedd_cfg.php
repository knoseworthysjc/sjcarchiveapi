<?php


//require_once "src/redbean/rb.php";
require_once "vendor/autoload.php";
use \RedBeanPHP\R as R;
define( 'REDBEAN_MODEL_PREFIX', '\\storedd\\models\\' );
$host = "sjc-content-archive-dev.cpi3jpipzm32.us-east-1.rds.amazonaws.com";
//$db = "sjccontentarchive";
$db = "sjccontentarchive";
$user = "sjcArchiveWebApps";
$pass = "15BentonRoad!";
$rbsetup = \R::setup("mysql:host=$host;dbname=$db;",$user,$pass);
\R::setAutoResolve( TRUE );        //Recommended as of version 4.2
\R::fancyDebug( FALSE );
\R::useJSONFeatures(TRUE);





?>