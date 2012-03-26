<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			/* uncomment the following to provide test database connection
			'db'=>array(
				'connectionString'=>'DSN for test database',
			),
			*/
   
            'db'=>array(
                'connectionString'=>'mysql:host=localhost;dbname=trackstar_test',
                'emulatePrepare'=>TRUE,
                'username'=>'root',
                'password'=>'www',
                'charset'=>'utf8',
            ),                   
                    
		),

	)
);
