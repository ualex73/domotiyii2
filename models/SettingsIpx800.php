<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_ipx800".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $tcphost
 * @property integer $tcpport
 * @property string $username
 * @property string $password
 * @property integer $poll
 * @property integer $debug
 */
class SettingsIpx800 extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_ipx800';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'tcpport', 'poll'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['tcphost', 'username', 'password'], 'string', 'max' => 32],
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
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'poll' => Yii::t('app', 'Poll'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
