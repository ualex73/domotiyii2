<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_wirelesstags".
 *
 * @property integer $id
 * @property integer $enabled
 * @property integer $polltime
 * @property string $user
 * @property string $password
 * @property integer $debug
 */
class SettingsWirelesstags extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_wirelesstags';
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
            'polltime' => Yii::t('app', 'Polltime'),
            'user' => Yii::t('app', 'User'),
            'password' => Yii::t('app', 'Password'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
