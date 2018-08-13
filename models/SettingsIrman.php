<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_irman".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $serialport
 * @property integer $debug
 */
class SettingsIrman extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_irman';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['serialport'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'enabled' => Yii::t('app', 'Enabled'),
            'serialport' => Yii::t('app', 'Serial port'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
