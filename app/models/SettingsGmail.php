<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_gmail".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $user
 * @property string $password
 * @property integer $polltime
 * @property integer $debug
 */
class SettingsGmail extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_gmail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'polltime'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
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
            'user' => Yii::t('app', 'User'),
            'password' => Yii::t('app', 'Password'),
            'polltime' => Yii::t('app', 'Poll Interval'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
