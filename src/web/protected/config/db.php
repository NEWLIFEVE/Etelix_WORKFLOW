<?php
// Solo contiene la informacion de conexion de base de datos
return array(
	'components'=>array(
		'db'=>array(
			'connectionString'=>'pgsql:host=172.16.15.19;port=5432;dbname=aru_20150330',
			'emulatePrepare'=>true,
			'username'=>'postgres',
            'password'=>'123',
			'charset'=>'utf8',
			'enableProfiling'=>true,
        	'enableParamLogging'=>true,
            ),
		)
	);