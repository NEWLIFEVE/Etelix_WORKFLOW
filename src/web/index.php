<?php
define('SERVER_NAME_PROD', 'ribela.net');
define('SERVER_NAME_LOCAL', 'ribela.local');
define('SERVER_NAME_ALFA', 'alfa12.ribela.net');
define('SERVER_NAME_BETA', 'beta12.ribela.net');




$server=$_SERVER['SERVER_NAME'];

switch ($server){
    case SERVER_NAME_PROD:
            define('SERVER_NAME_RIBELA', 'ribela.net');
            define('SERVER_NAME_ARU', 'aru.ribela.net');
            define('SERVER_NAME_PIG', 'pig.ribela.net');
            define('SERVER_NAME_ATC', 'atc.ribela.net');
            define('SERVER_NAME_SORI', 'sori.ribela.net');
            $yii=dirname(__FILE__).'/../../../../yii/yii.php';
        break;
    case SERVER_NAME_ALFA:
            define('SERVER_NAME_RIBELA', 'alfa12.ribela.net');
            define('SERVER_NAME_ARU', 'alfa4.ribela.net');
            define('SERVER_NAME_PIG', 'alfa11.ribela.net');
            define('SERVER_NAME_ATC', 'alfa2.ribela.net');
            define('SERVER_NAME_SORI', 'no se');
            $yii=dirname(__FILE__).'/../../../../../../yii/yii.php';
        break;
    case SERVER_NAME_BETA:
            define('SERVER_NAME_RIBELA', ' beta12.ribela.net');
            define('SERVER_NAME_ARU', 'beta4.ribela.net');
            define('SERVER_NAME_PIG', 'beta11.ribela.net');
            define('SERVER_NAME_ATC', 'beta2.ribela.net');
            define('SERVER_NAME_SORI', 'no se');
            $yii=dirname(__FILE__).'/../../../../../../yii/yii.php';
        break;
    default:
            define('SERVER_NAME_RIBELA', 'ribela.local');
            define('SERVER_NAME_ARU', 'aru.local');
            define('SERVER_NAME_PIG', 'pig.local');
            define('SERVER_NAME_ATC', 'atc.local');
            define('SERVER_NAME_SORI', 'sori.local');
            $yii=dirname(__FILE__).'/../../../yii/framework/yii.php';
           
        break;
}


// change the following paths if necessary
//$yii=dirname(__FILE__).'/../../../yii/yii.php';

$yii=dirname(__FILE__).'/../../../yii/framework/yii.php';
// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
require_once($yii);



$main=require(dirname(__FILE__).'/protected/config/main.php');
$db=require(dirname(__FILE__).'/protected/config/db.php');
 $gii=require(dirname(__FILE__).'/protected/config/gii.php');

$config=CMap::mergeArray($main,$db,$gii);

Yii::createWebApplication($config)->run();
