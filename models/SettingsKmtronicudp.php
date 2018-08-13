<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_kmtronicudp".
 *
 * @property integer $id
 * @property integer $enabled
 * @property integer $udpport
 * @property integer $polltime
 * @property integer $debug
 */
class SettingsKmtronicudp extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_kmtronicudp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'udpport', 'polltime'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
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
            'udpport' => Yii::t('app', 'Udp port'),
            'polltime' => Yii::t('app', 'Poll Interval'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
