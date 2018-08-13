<?php

/*
Normal field:
{label} {beginWrapper} {input} {error} {endWrapper} {hint}

Checkbox field:
{beginWrapper} {beginLabel} {input} {labelTitle} {endLabel} {error} {endWrapper} {hint}
*/

/**
 *
 */

namespace app\components;

use Yii;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Html;

class ActiveField extends \yii\bootstrap\ActiveField
{

    /**
     * Array addon options for inputs. The following can be configured:
     * - prepend/append: array the prepend/append addon configuration
     *   - content: string the prepend/append addon content
     *   - button: boolean whether the addon is a button or button group. Default is false
     *   - options: array the HTML attributes to be added to the container
     * - groupOptions: array HTML options for the input group
     * - contentBefore: string content placed before addon
     * - contentAfter: string content placed after addon
     */
    public $addon = [];

    /**
     * Content to be placed before input
     */
    public $contentBeforeInput = '';

    /**
     * Content to be placed after input
     */
    public $contentAfterInput = '';


/**
 TBD:
 prepend
 append
 checkbox label on left

 */

    public function __construct($config = [])
    {
        $layoutConfig = $this->createLayoutConfig($config);
        $config = ArrayHelper::merge($layoutConfig, $config);
/* var_dump($config); */
        parent::__construct($config);
    }

    /**
     * Parse and returns addon content
     */
    protected static function getAddonContent($addon)
    {
        if (!is_array($addon)) return $addon;

        $content = ArrayHelper::getValue($addon, 'content', '');
        $options = ArrayHelper::getValue($addon, 'options', []);

        if (ArrayHelper::getValue($addon, 'button', false) == true) {
            Html::addCssClass($options, 'input-group-btn');
            return Html::tag('span', $content, $options);
        } else {
            Html::addCssClass($options, 'input-group-addon');
            return Html::tag('span', $content, $options);
        }
    }

    /**
     *
     */
    protected function generateAddon()
    {
        if (empty($this->addon)) return '{input}';

        $addon = $this->addon;

        $prepend = static::getAddonContent(ArrayHelper::getValue($addon, 'prepend', ''));
        $append = static::getAddonContent(ArrayHelper::getValue($addon, 'append', ''));
        $content = $prepend . '{input}' . $append;
        $group = ArrayHelper::getValue($addon, 'groupOptions', []);
        Html::addCssClass($group, 'input-group');
        $contentBefore = ArrayHelper::getValue($addon, 'contentBefore', '');
        $contentAfter = ArrayHelper::getValue($addon, 'contentAfter', '');
        $content = Html::tag('div', $contentBefore . $content . $contentAfter, $group);
        return $content;
    }

    /**
     *
     */
    protected function buildTemplate()
    {
        $input = null;

        $newInput = $this->contentBeforeInput . $this->generateAddon() . $this->contentAfterInput;
        $this->template = str_replace('{input}', $newInput, $this->template);
    }

    /**
     *
     */
    public function render($content = null)
    {
        $this->buildTemplate();

        return parent::render($content);
    }

    /**
     * @inheritdoc
     */
    public function checkbox($options = [], $enclosedByLabel = true)
    {
        if ($enclosedByLabel) {
/*
modify template
remove css:
removeCssClass()
*/
            if (!isset($options['template'])) {
                $this->template = $this->form->layout === 'horizontal' ?
                    $this->horizontalCheckboxTemplate : $this->checkboxTemplate;
            } else {
                $this->template = $options['template'];
                unset($options['template']);
            }
            if (isset($options['label'])) {
                $this->parts['{labelTitle}'] = $options['label'];
            }
            if ($this->form->layout === 'horizontal') {
                Html::addCssClass($this->wrapperOptions, $this->horizontalCssClasses['offset']);
            }
            $this->labelOptions['class'] = null;
        }

        return parent::checkbox($options, false);
    }

}
