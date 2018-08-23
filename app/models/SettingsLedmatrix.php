<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_ledmatrix".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $serialport
 * @property integer $color
 * @property integer $speed
 * @property integer $displayid
 * @property integer $debug
 */
class SettingsLedmatrix extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_ledmatrix';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'color', 'speed', 'displayid'], 'integer'],
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
            'color' => Yii::t('app', 'Color'),
            'speed' => Yii::t('app', 'Speed'),
            'displayid' => Yii::t('app', 'Display id'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
