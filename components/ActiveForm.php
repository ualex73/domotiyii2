<?php

/**
 *
 */

namespace app\components;

use Yii;
use yii\base\InvalidConfigException;

class ActiveForm extends \yii\bootstrap\ActiveForm
{
    /**
     * @var string the default field class name when calling [[field()]] to create a new field.
     * @see fieldConfig
     */
    public $fieldClass = 'app\components\ActiveField';
    /**
     * @var string the customized form layout, overrulling the Yii2 bootstrap defaults.
     * Possible values:
     * - <empty>
     * - settings
     * - ...
     */
    public $layoutType = '';

    /**
     * @inheritdoc
     */
    public function init()
    {
        self::createCustomizedLayout();
        parent::init();
    }

    /**
     * @inheritdoc
     * @return ActiveField the created ActiveField object
     */
    public function field($model, $attribute, $options = [])
    {
        return parent::field($model, $attribute, $options);
    }

    /**
     */
    protected function createCustomizedLayout()
    {
        if ($this->layoutType === 'settings') {

            $this->fieldConfig = [
                'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                'horizontalCssClasses' => [
                    'label' => 'col-sm-2',
                    'offset' => 'col-sm-offset-2',
                    'wrapper' => 'col-sm-4',
                    'error' => '',
                    'hint' => '',
                ],
            ];

        }
    }
}
