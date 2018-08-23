<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_ctx35".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $serialport
 * @property string $baudrate
 * @property integer $polltime
 * @property integer $globalx10
 * @property integer $debug
 */
class SettingsCtx35 extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_ctx35';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'polltime'], 'integer'],
            [['enabled', 'globalx10', 'debug'], 'boolean'],
            [['serialport'], 'string', 'max' => 128],
            [['baudrate'], 'string', 'max' => 32],
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
            'serialport' => Yii::t('app', 'Serialport'),
            'baudrate' => Yii::t('app', 'Baudrate'),
            'polltime' => Yii::t('app', 'Polltime'),
            'globalx10' => Yii::t('app', 'Globalx10'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
