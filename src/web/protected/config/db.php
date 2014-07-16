<?php
// Solo contiene la informacion de conexion de base de datos
return array(
	'components'=>array(
		'db'=>array(
			'connectionString'=>'pgsql:host=172.16.17.190;port=5432;dbname=aru',
			'emulatePrepare'=>true,
			'username'=>'postgres',
            'password'=>'123',
			'charset'=>'utf8',
			'enableProfiling'=>true,
        	'enableParamLogging'=>true,
            ),
		)
	);