<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'bkl',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'customer/site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'urlManager'=>[
            'class' => 'yii\web\UrlManager',
                'enablePrettyUrl' => true,
                'showScriptName' => false,
                'rules' => require(__DIR__ . '/url.php'),
		],
        'view' => [
            'theme' => [
                'pathMap' => ['@app/module/customer/views' => 'themes/customer'],
                'baseUrl'   => 'themes/customer'
              ]
        ]   

        
    ],
    'params' => $params,
    'bootstrap' => ['gii'],
    'modules' => [
        'gii' => 'yii\gii\Module',
        'admin' => [
            'class' => 'app\modules\admin\Module',
            // ... other configurations for the module ...
        ],
        'customer' => [
            'class' => 'app\modules\customer\Module',
            // ... other configurations for the module ...
        ],
    ],
    'aliases'=>[
        //'@asset'=>  dirname(dirname(dirname(dirname(rtrim(dirname($_SERVER['PHP_SELF']), '\\/'))))).'/assets/'
        '@asset'=>  '/themes/'
    ],
    'defaultRoute' => 'customer/site/index',
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    //$config['bootstrap'][] = 'debug';
    //$config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
