<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_temp08".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $serialport
 * @property integer $baudrate
 * @property integer $debug
 */
class SettingsTemp08 extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_temp08';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'baudrate'], 'integer'],
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
            'serialport' => Yii::t('app', 'Serial Port'),
            'baudrate' => Yii::t('app', 'Baud Rate'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
