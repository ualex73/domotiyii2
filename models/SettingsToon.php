<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_toon".
 *
 * @property integer $id
 * @property integer $enabled
 * @property integer $polltime
 * @property string $user
 * @property string $password
 * @property integer $debug
 */
class SettingsToon extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_toon';
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
            'polltime' => Yii::t('app', 'Poll Interval'),
            'user' => Yii::t('app', 'User'),
            'password' => Yii::t('app', 'Password'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
