<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_cul".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $tcphost
 * @property integer $tcpport
 * @property string $type
 * @property string $serialport
 * @property string $baudrate
 * @property integer $model
 * @property string $fhtid
 * @property integer $debug
 */
class SettingsCul extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_cul';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'tcpport', 'model'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['tcphost', 'type', 'baudrate', 'fhtid'], 'string', 'max' => 32],
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
            'tcphost' => Yii::t('app', 'TCP Host'),
            'tcpport' => Yii::t('app', 'TCP Port'),
            'type' => Yii::t('app', 'Type'),
            'serialport' => Yii::t('app', 'Serial Port'),
            'baudrate' => Yii::t('app', 'Baud Rate'),
            'model' => Yii::t('app', 'Model'),
            'fhtid' => Yii::t('app', 'FHT Id'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
