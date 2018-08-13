<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_plcbus".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $serialport
 * @property string $baudrate
 * @property integer $polltime
 * @property string $usercode
 * @property integer $threephase
 * @property string $housecodes
 * @property integer $ack
 * @property integer $debug
 */
class SettingsPlcbus extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_plcbus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'polltime'], 'integer'],
            [['enabled', 'threephase', 'ack', 'debug'], 'boolean'],
            [['serialport'], 'string', 'max' => 128],
            [['baudrate', 'housecodes'], 'string', 'max' => 32],
            [['usercode'], 'string', 'max' => 16],
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
            'usercode' => Yii::t('app', 'Usercode'),
            'threephase' => Yii::t('app', 'Threephase'),
            'housecodes' => Yii::t('app', 'Housecodes'),
            'ack' => Yii::t('app', 'Ack'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
