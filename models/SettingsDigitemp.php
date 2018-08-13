<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_digitemp".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $command
 * @property string $config
 * @property integer $polltime
 * @property integer $readtime
 * @property integer $debug
 */
class SettingsDigitemp extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_digitemp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'polltime', 'readtime'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['command', 'config'], 'string', 'max' => 32],
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
            'command' => Yii::t('app', 'Command'),
            'config' => Yii::t('app', 'Config'),
            'polltime' => Yii::t('app', 'Poll Interval'),
            'readtime' => Yii::t('app', 'Read time'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
