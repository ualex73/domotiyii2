<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_knx".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $tcphost
 * @property integer $tcpport
 * @property integer $debug
 */
class SettingsKnx extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_knx';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'tcpport'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['tcphost'], 'string', 'max' => 32],
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
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
