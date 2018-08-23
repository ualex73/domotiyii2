<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_plugwise".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $serialport
 * @property integer $polltime
 * @property integer $busytime
 * @property integer $debug
 */
class SettingsPlugwise extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_plugwise';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'polltime', 'busytime'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['serialport'], 'string', 'max' => 128],
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
            'serialport' => Yii::t('app', 'Serial port'),
            'polltime' => Yii::t('app', 'Poll Interval'),
            'busytime' => Yii::t('app', 'Busy time'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
