<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_videoserver".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $tcphost
 * @property integer $tcpport
 * @property string $user
 * @property string $password
 * @property string $channel1
 * @property string $channel2
 * @property string $channel3
 * @property string $channel4
 * @property integer $debug
 */
class SettingsVideoserver extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_videoserver';
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
            [['tcphost', 'channel1', 'channel2', 'channel3', 'channel4'], 'string', 'max' => 32],
            [['user', 'password'], 'string', 'max' => 64],
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
            'tcphost' => Yii::t('app', 'Tcphost'),
            'tcpport' => Yii::t('app', 'Tcpport'),
            'user' => Yii::t('app', 'User'),
            'password' => Yii::t('app', 'Password'),
            'channel1' => Yii::t('app', 'Channel1'),
            'channel2' => Yii::t('app', 'Channel2'),
            'channel3' => Yii::t('app', 'Channel3'),
            'channel4' => Yii::t('app', 'Channel4'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
