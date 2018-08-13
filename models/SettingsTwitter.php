<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_twitter".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $username
 * @property string $password
 * @property integer $sendtimestamp
 * @property integer $debug
 */
class SettingsTwitter extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_twitter';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['enabled', 'sendtimestamp', 'debug'], 'boolean'],
            [['username', 'password'], 'string', 'max' => 64],
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
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'sendtimestamp' => Yii::t('app', 'Sendtimestamp'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
