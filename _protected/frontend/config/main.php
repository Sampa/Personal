<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        // here you can set theme used for your frontend application 
        // - template comes with: 'default', 'slate', 'spacelab' and 'cerulean'
        'view' => [
            'class' => 'yii\web\View',
            'renderers' => [
                'twig' => [
                    'class' => 'yii\twig\ViewRenderer',
                    'cachePath' => '@runtime/Twig/cache',
                    // Array of twig options:
                    'options' => [
                        'auto_reload' => true,
                    ],
                    'globals' => [
                        'html' => ['class' => '\yii\helpers\Html'],
                        'ListView' => ['class' => '\yii\widgets\ListView'],
                        'Url' => ['class' => '\yii\helpers\Url'],
                        'My' => ['class' => '\common\helpers\My'],

                    ],
                    'uses' => ['yii\bootstrap'],
                    'functions' => [
                        new \Twig_SimpleFunction('partial_render', function ($model,$foo) {
                            return $foo->render('_index', ['model' => $model]);
                        }, ['is_safe'=>['html']]),
                        't' => '\common\helpers\My::t',
                        'ListViewWidget' => 'yii\widgets\ListView::Widget',
                        'HtmlSubmitButton' => '\yii\helpers\Html::submitButton',
                        'CaptchaClassName' => '\yii\captcha\Captcha::className'
                    ]
                ],
                // ...
            ],
            'theme' => [
                'pathMap' => ['@app/views' => '@webroot/themes/casual/views'],
                'baseUrl' => '@web/themes/casual',
            ],
        ],
        'user' => [
            'identityClass' => 'common\models\UserIdentity',
            'enableAutoLogin' => true,
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
    'params' => $params,
];
