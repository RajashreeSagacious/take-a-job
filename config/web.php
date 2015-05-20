<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
	   'urlManager' => [
					'class' => 'yii\web\UrlManager',
					'enablePrettyUrl' => true,
					'showScriptName' => false,
					'enableStrictParsing' => false,
					'rules' => [
						'login/' => 'site/login',
						'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>/',
						'<controller:\w+>/<action:\w+>' => '<controller>/<action>/',
						'<controller:\w+>/<id:\d+>' => '<controller>/view',
					],
				],	
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'takeajob',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\UserLogin',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
         
    'mailer' => [
                'class' => 'yii\swiftmailer\Mailer',
                //'viewPath' => '@common/mail',
                'useFileTransport' => false, //Put the list in the local mail, e-mail can open the test
                        
                            'transport' => [
                                            'class' => 'Swift_SmtpTransport',
                                            'host' => 'smtp.mandrillapp.com',
                                            'username' => 'manjunath@sagacioushrm.com',
                                            'password' => 'NF2TiuK4dJ1ZOII8J4cslA',
                                            'port' => '587',
                                            'encryption' => 'tls',
                                      
                                ],
                         
            ],

        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    //$config['modules']['debug'] = 'yii\debug\Module';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' => array($_SERVER['REMOTE_ADDR'])
    ];
 
    $config['bootstrap'][] = 'gii';
   // $config['modules']['gii'] = 'yii\gii\Module';
     $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => array($_SERVER['REMOTE_ADDR']),

    ];  
}





return $config;
