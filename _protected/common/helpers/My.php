<?php
/**
 * Created by PhpStorm.
 * User: Happyjuiced
 * Date: 2017-04-16
 * Time: 16:25
 */

namespace common\helpers;

use Yii;
use yii\base\Object;

class My extends Object
{
    /**
     * @param $string to be translated
     * @param app $category category where translation exists defaults to "app"
     * @return string translated string
     */
    public static function t($string,$category="app")
    {
        return Yii::t($category,$string);
    }
}