<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);
use \yii\helpers\Url;

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'en',
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
                        'GridView' => ['class' => '\yii\grid\GridView'],
                        'Url' => ['class' => '\yii\helpers\Url'],
                        'My' => ['class' => '\common\helpers\My'],
                        //'LanguageSelector' => ['class' => 'frontend\widgets\LanguageSelector']

                    ],
                    'uses' => ['yii\bootstrap'],
                    'functions' => [
                        new \Twig_SimpleFunction('partial_render', function ($model,$foo) {
                            return $foo->render('_index', ['model' => $model]);
                        }, ['is_safe'=>['html']]),
                        't' => '\common\helpers\My::t',
                        'param' => '\common\helpers\My::param',
                        'ListViewWidget' => 'yii\widgets\ListView::Widget',
                        'GridViewWidget' => 'yii\grid\GridView::Widget',
                        'LanguageSelector' => 'frontend\widgets\LanguageSelector::Widget',
                        'CaptchaClassName' => '\yii\captcha\Captcha::className',
                        'HtmlCsrfMetaTags' => '\yii\helpers\Html::csrfMetaTags',
                        'CssHelperArticleCategoryCss' => '\common\helpers\CssHelper::articleCategoryCss',
                        new \Twig_SimpleFunction('urlto', function($url,$options) {
                            return Url::to(array_merge($url,$options));
                        }),
                        new \Twig_SimpleFunction('pathto', function($url,$options) {
                            return Url::to(array_merge($url,$options));
                        }),
                        new \Twig_SimpleFunction('html', function($name, $arguments=[]) {
                            return call_user_func_array(array('\yii\helpers\Html', $name), $arguments);
                        }),
                        new \Twig_SimpleFunction('GridView', function($options=[]) {
                            return \yii\grid\GridView::widget([$options]);
                        })

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
