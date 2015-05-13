<?php
define('SERVER_NAME_PROD', 'ribela.net');
define('SERVER_NAME_LOCAL', 'ribela.local');




$server=$_SERVER['SERVER_NAME'];

switch ($server){
    case SERVER_NAME_PROD:
            define('SERVER_NAME_RIBELA', 'ribela.net');
            define('SERVER_NAME_ARU', 'aru.ribela.net');
            define('SERVER_NAME_PIG', 'pig.ribela.net');
            $yii=dirname(__FILE__).'/../../../yii/yii.php';
        break;
    default:
            define('SERVER_NAME_RIBELA', 'ribela.local');
            define('SERVER_NAME_ARU', 'aru.local');
            define('SERVER_NAME_PIG', 'pig.local');
            $yii=dirname(__FILE__).'/../../../yii/framework/yii.php';
            $gii=require(dirname(__FILE__).'/protected/config/gii.php');
        break;
}


// change the following paths if necessary
//$yii=dirname(__FILE__).'/../../../yii/yii.php';


// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
require_once($yii);



$main=require(dirname(__FILE__).'/protected/config/main.php');
$db=require(dirname(__FILE__).'/protected/config/db.php');


$config=CMap::mergeArray($main,$db,$gii);

Yii::createWebApplication($config)->run();
