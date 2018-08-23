<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_dsc".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $serialport
 * @property integer $baudrate
 * @property integer $type
 * @property string $mastercode
 * @property integer $debug
 */
class SettingsDsc extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_dsc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'baudrate', 'type'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['serialport'], 'string', 'max' => 128],
            [['mastercode'], 'string', 'max' => 16],
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
            'baudrate' => Yii::t('app', 'Baud rate'),
            'type' => Yii::t('app', 'Type'),
            'mastercode' => Yii::t('app', 'Master code'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
