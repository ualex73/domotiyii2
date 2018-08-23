<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_email".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $fromaddress
 * @property string $toaddress
 * @property string $smtpserver
 * @property integer $smtpport
 * @property integer $sslenabled
 * @property string $username
 * @property string $password
 * @property integer $debug
 */
class SettingsEmail extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_email';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'smtpport'], 'integer'],
            [['enabled', 'sslenabled', 'debug'], 'boolean'],
            [['fromaddress', 'toaddress', 'smtpserver', 'username', 'password'], 'string', 'max' => 64],
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
            'fromaddress' => Yii::t('app', 'From address'),
            'toaddress' => Yii::t('app', 'To address'),
            'smtpserver' => Yii::t('app', 'Smtp server'),
            'smtpport' => Yii::t('app', 'Smtp port'),
            'sslenabled' => Yii::t('app', 'TLS/SSL Enabled'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
