<?php
// Solo contiene la informacion de conexion de base de datos
return array(
	'components'=>array(
		'db'=>array(
			'connectionString'=>'pgsql:host=127.0.0.1;port=5432;dbname=dev_aru_25092014',
			'emulatePrepare'=>true,
			'username'=>'postgres',
            'password'=>'123',
			'charset'=>'utf8',
			'enableProfiling'=>true,
        	'enableParamLogging'=>true,
            ),
		)
	);