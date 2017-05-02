<?php
/**
 * -----------------------------------------------------------------------------
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * -----------------------------------------------------------------------------
 */

namespace frontend\assets;

use yii\web\AssetBundle;
use Yii;

// set @themes alias so we do not have to update baseUrl every time we change themes
Yii::setAlias('@themes', Yii::$app->view->theme->baseUrl);

/**
 * -----------------------------------------------------------------------------
 * @author Qiang Xue <qiang.xue@gmail.com>
 *
 * @since 2.0
 * -----------------------------------------------------------------------------
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@themes';

    public $css = [
        //theme
        'css/site.css',
        'css/bootstrap.css',
        //other
        '../../css/flag-icon.min.css',
        '../../css/box.css',
        '../../css/sidemenu.css',
//        '../../css/media.css'
    ];
    public $js = [
        //theme
        '../../js/theme.js',
        '../../js/sidemenu.js',
        //other
//        'js/bootstrap.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}

