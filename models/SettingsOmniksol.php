<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_omniksol".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $tcphost
 * @property integer $tcpport
 * @property string $serial
 * @property string $cron
 * @property integer $discover
 * @property integer $debug
 */
class SettingsOmniksol extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_omniksol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'tcpport'], 'integer'],
            [['enabled', 'discover', 'debug'], 'boolean'],
            [['tcphost'], 'string', 'max' => 32],
            [['serial', 'cron'], 'string', 'max' => 16],
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
            'tcphost' => Yii::t('app', 'Tcp Host'),
            'tcpport' => Yii::t('app', 'Tcp Port'),
            'serial' => Yii::t('app', 'Serial #'),
            'cron' => Yii::t('app', 'Cron'),
            'discover' => Yii::t('app', 'Discover'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
