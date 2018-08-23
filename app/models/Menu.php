<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property integer $id
 * @property string $name
 * @property string $item
 * @property integer $menu
 * @property integer $position
 * @property string $icon
 * @property integer $enabled
 */
class Menu extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu', 'position'], 'integer'],
            [['enabled'], 'boolean'],
            [['name', 'item', 'icon'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'item' => Yii::t('app', 'Item'),
            'menu' => Yii::t('app', 'Menu'),
            'position' => Yii::t('app', 'Position'),
            'icon' => Yii::t('app', 'Icon'),
            'enabled' => Yii::t('app', 'Enabled'),
        ];
    }
}
