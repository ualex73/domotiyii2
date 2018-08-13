<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_asterisk".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $tcphost
 * @property integer $tcpport
 * @property integer $polltime
 * @property string $user
 * @property string $password
 * @property integer $debug
 */
class SettingsAsterisk extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_asterisk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'enabled', 'tcpport', 'polltime', 'debug'], 'integer'],
            [['tcphost'], 'string', 'max' => 32],
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
            'tcphost' => Yii::t('app', 'TCP Host'),
            'tcpport' => Yii::t('app', 'TCP Port'),
            'polltime' => Yii::t('app', 'Poll Interval'),
            'user' => Yii::t('app', 'User'),
            'password' => Yii::t('app', 'Password'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
