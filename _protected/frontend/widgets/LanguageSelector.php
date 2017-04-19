<?php
/**
 * Created by PhpStorm.
 * User: Happyjuiced
 * Date: 2017-04-17
 * Time: 10:46
 */

namespace frontend\widgets;

use yii\helpers\Html;
use Yii;
use yii\bootstrap\BootstrapPluginAsset;
use yii\bootstrap\Dropdown;
use yii\helpers\ArrayHelper;


class LanguageSelector extends Dropdown{
    private static $_labels;

    private $_isError;

    public function init()
    {
        $route = Yii::$app->controller->route;
        $appLanguage = Yii::$app->language;
        $params = $_GET;
        $this->_isError = $route === Yii::$app->errorHandler->errorAction;

        array_unshift($params, '/' . $route);

        foreach (Yii::$app->urlManager->languages as $language) {
            $isWildcard = substr($language, -2) === '-*';
            if (
                $language === $appLanguage ||
                // Also check for wildcard language
                $isWildcard && substr($appLanguage, 0, 2) === substr($language, 0, 2)
            ) {
                continue;   // Exclude the current language
            }
            if ($isWildcard) {
                $language = substr($language, 0, 2);
            }
            $params['language'] = $language;
            $this->items[] = [
                'label' => self::label($language),
                'url' => $params,
                'encode' => true,
                'linkOptions' => ['class' => 'flag-icon flag-icon-' .  $this->getCode($language)]
            ];

        }
        parent::init();
    }
    /**
     * Renders the widget.
     */
    public function run()
    {
//        BootstrapPluginAsset::register($this->getView());
//        $this->registerClientEvents();
        return $this->renderItems($this->items, $this->options);
    }

    /**
     * Renders menu items.
     * @param array $items the menu items to be rendered
     * @param array $options the container HTML attributes
     * @return string the rendering result.
     * @throws InvalidConfigException if the label option is not specified in one of the items.
     */
    protected function renderItems($items, $options = [])
    {
        $lines = [];
        foreach ($items as $item) {
            if (isset($item['visible']) && !$item['visible']) {
                continue;
            }
            if (is_string($item)) {
                $lines[] = $item;
                continue;
            }
            if (!array_key_exists('label', $item)) {
                throw new InvalidConfigException("The 'label' option is required.");
            }
            $encodeLabel = isset($item['encode']) ? $item['encode'] : $this->encodeLabels;
            $label = $encodeLabel ? Html::encode($item['label']) : $item['label'];
            $itemOptions = ArrayHelper::getValue($item, 'options', []);
            $linkOptions = ArrayHelper::getValue($item, 'linkOptions', []);
            $linkOptions['tabindex'] = '-1';
            $url = array_key_exists('url', $item) ? $item['url'] : null;
            if (empty($item['items'])) {
                if ($url === null) {
                    $content = $label;
                    Html::addCssClass($itemOptions, ['widget' => 'dropdown-header']);
                } else {
                    $content = Html::a($label, $url, $linkOptions);
                }
            } else {
                $submenuOptions = $this->submenuOptions;
                if (isset($item['submenuOptions'])) {
                    $submenuOptions = array_merge($submenuOptions, $item['submenuOptions']);
                }
                $content = Html::a($label, $url === null ? '#' : $url, $linkOptions)
                    . $this->renderItems($item['items'], $submenuOptions);
                Html::addCssClass($itemOptions, ['widget' => '']);
            }

            $lines[] = Html::tag('li', $content, $itemOptions);
        }

       return '<div class="">' . $this->flag() . Html::tag('ul', implode("\n", $lines), $options) . '</div>';
    }

    protected function flag(){
        return Html::a(
            '<span class="flag flag-icon flag-icon-'.  $this->getCode(Yii::$app->language) .'"></span><b class="caret"></b>',
            '#',
            [
                'class' => 'dropdown-toggle',
                'data-toggle' => 'dropdown'
            ]
        );
    }

    public function getCode($language){
        $l = explode("_", $language);
        $lang = strtolower(array_pop($l));
        if($language === "en"){
            $lang = "us";
        }
        return $lang;
    }

    public static function label($code)
    {
        if (self::$_labels === null) {
            self::$_labels = [
               /* 'es' => Yii::t('app', 'Spanish'),
                'en_US' => Yii::t('app', 'English'),
                'se' => Yii::t('app', 'Swedish'),
                'sr' => Yii::t('app', 'Serbian'),
                'it' => Yii::t('app', 'Italian'),
                'ru' => Yii::t('app', 'Russian'),
                'pt_BR' => Yii::t('app', 'Portuguese(Bra)')*/
                'es' => '',
                'en_US' => '',
                'en' => '',
                'se' => '',
                'sr' => '',
                'it' => '',
                'ru' => '',
                'pt_BR' => ''
            ];
        }

        return isset(self::$_labels[$code]) ? self::$_labels[$code] : null;
    }
}
?>