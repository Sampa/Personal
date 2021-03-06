<?php
return [
    'name' => 'Sampa',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'en',
    'modules' => [
        'media' => [
            'class' => sampa\media\Module::className(),
            'tempPath' => 'uploads/temp',
            'storePath' => 'uploads/store',
            'rules' => [ // Rules according to the FileValidator
                'maxFiles' => 10, // Allow to upload maximum 3 files, default to 3
//                'mimeTypes' => 'image/png, image/jpeg', // Only png images
                'maxSize' => 1024 * 1024 // 1 MB
            ],
            'tableName' => '{{%attachments}}', // Optional, default to 'attach_file'
            'controllerMap' => [
                'migrate' => [
                    'class' => 'yii\console\controllers\MigrateController',
                    'migrationNamespaces' => [
                        'sampa\attachments\migrations',
                    ],
                ],
            ],
        ],
        'controllerMap' => [
            'migrate' => [
                'class' => 'yii\console\controllers\MigrateController',
                'migrationNamespaces' => [
                    'sampa\attachments\migrations',
                ],
            ],
        ],
    ],
    'components' => [

        'assetManager' => [
            'bundles' => [
                // we will use bootstrap css from our theme
                'yii\bootstrap\BootstrapAsset' => [
                    'css' => [], // do not use yii default one
                ],
                /* // use bootstrap js from CDN
                 'yii\bootstrap\BootstrapPluginAsset' => [
                     'sourcePath' => null,   // do not use file from our server
                     'js' => [
                         'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js']
                 ],
                 // use jquery from CDN
                 /*'yii\web\JqueryAsset' => [
                     'sourcePath' => null,   // do not use file from our server
                     'js' => [
                         'ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js',
                     ]
                 ],*/
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'class' => 'codemix\localeurls\UrlManager',
            // List all supported languages here
            'languages' => ['en', 'se'],
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules'=>[
                '<alias:articles>' => 'article/index',
                '<alias:search>' => 'article/search',
                '<alias:about|contact|login|signup|logout>' => 'site/<alias>',
                '<controller:\w+>/<id:\d+>/<title:\w+>' => '<controller>/view',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/admin/<id:\d+>' => '<controller>/view',
                'media/upload/<type:\w+>' =>'media/upload',
//                'media/upload/<type:\w+>/<class:\w+>/<id:\d+>' =>'media/upload',
                'articles/<category:\w+>' => 'article/index',
                'artiklar/<category:\w+>' => 'article/index'

            ]
            /*languageCookieDuration: How long in seconds to store the language information in a cookie.
             Set to false to disable the cookie.
            languageCookieName: The name of the language cookie. Default is _language.
            languageCookieOptions: Other options to set on the language cookie.
            languageSessionKey: The name of the language session key. Default is _language.*/
        ],
        'session' => [
            'class' => 'yii\web\DbSession',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/translations',
                    'sourceLanguage' => 'en',
                ],
                'yii' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/translations',
                    'sourceLanguage' => 'en'
                ],
            ],
        ],
    ], // components

    // set allias for our uploads folder so it can be shared by both frontend and backend applications
    // @appRoot alias is definded in common/config/bootstrap.php file
    'aliases' => [
        '@uploads' => 'uploads',
    ],
];
