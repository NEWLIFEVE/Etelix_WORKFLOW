<?php
define('SERVER_NAME_PROD', 'ribela.net');
define('SERVER_NAME_PROD2', 'www.ribela.net');
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
            define('SERVER_NAME_SINE', 'sine.ribela.net');
            define('SERVER_NAME_RENOC', 'renoc.ribela.net');
	    define('SERVER_NAME_IMEKA', 'imeka.ribela.net'); 	
	    defined('YII_DEBUG') or define('YII_DEBUG',false);
	    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',0);
            $yii=dirname(__FILE__).'/../../../../yii/yii.php';
        break;
    case SERVER_NAME_PROD2:
            define('SERVER_NAME_RIBELA', 'www.ribela.net');
            define('SERVER_NAME_ARU', 'aru.ribela.net');
            define('SERVER_NAME_PIG', 'pig.ribela.net');
            define('SERVER_NAME_ATC', 'atc.ribela.net');
            define('SERVER_NAME_SORI', 'sori.ribela.net');
            define('SERVER_NAME_SINE', 'sine.ribela.net');
            define('SERVER_NAME_RENOC', 'renoc.ribela.net');
	    define('SERVER_NAME_IMEKA', 'imeka.ribela.net');
	    defined('YII_DEBUG') or define('YII_DEBUG',false);
	    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',0);
            $yii=dirname(__FILE__).'/../../../../yii/yii.php';
        break;
    case SERVER_NAME_ALFA:
            define('SERVER_NAME_RIBELA', 'alfa12.ribela.net');
            define('SERVER_NAME_ARU', 'alfa4.ribela.net');
            define('SERVER_NAME_PIG', 'alfa11.ribela.net');
            define('SERVER_NAME_ATC', 'alfa2.ribela.net');
            define('SERVER_NAME_SORI', 'alfa13.ribela.net');
            define('SERVER_NAME_SINE', 'alfa14.ribela.net');
            define('SERVER_NAME_RENOC', 'alfa1.ribela.net');
	    define('SERVER_NAME_IMEKA', 'alfa10.ribela.net');
	    defined('YII_DEBUG') or define('YII_DEBUG',false);
	    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',0);
            $yii=dirname(__FILE__).'/../../../../../../yii/yii.php';
        break;
    case SERVER_NAME_BETA:
            define('SERVER_NAME_RIBELA', ' beta12.ribela.net');
            define('SERVER_NAME_ARU', 'beta4.ribela.net');
            define('SERVER_NAME_PIG', 'beta11.ribela.net');
            define('SERVER_NAME_ATC', 'beta2.ribela.net');
            define('SERVER_NAME_SORI', 'beta13.ribela.net');
            define('SERVER_NAME_SINE', 'beta14.ribela.net');
            define('SERVER_NAME_RENOC', 'beta1.ribela.net');
	    define('SERVER_NAME_IMEKA', 'beta10.ribela.net');
	    defined('YII_DEBUG') or define('YII_DEBUG',false);
	    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',0);
            $yii=dirname(__FILE__).'/../../../../../../yii/yii.php';
        break;
    default:
            define('SERVER_NAME_RIBELA', 'ribela.local');
            define('SERVER_NAME_ARU', 'aru.local');
            define('SERVER_NAME_PIG', 'pig.local');
            define('SERVER_NAME_ATC', 'atc.local');
            define('SERVER_NAME_SORI', 'sori.local');
            define('SERVER_NAME_SINE', 'sine.local');
            define('SERVER_NAME_RENOC', 'renoc.local');
	    define('SERVER_NAME_IMEKA', 'report.local');
	    defined('YII_DEBUG') or define('YII_DEBUG',true);
	    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
            $yii=dirname(__FILE__).'/../../../yii/framework/yii.php';
        break;
}


require_once($yii);

$main=require(dirname(__FILE__).'/protected/config/main.php');
$db=require(dirname(__FILE__).'/protected/config/db.php');
$gii=require(dirname(__FILE__).'/protected/config/gii.php');

$config=CMap::mergeArray($main,$db,$gii);

Yii::createWebApplication($config)->run();
