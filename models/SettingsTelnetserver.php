<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_telnetserver".
 *
 * @property integer $id
 * @property integer $enabled
 * @property integer $telnetport
 * @property integer $debug
 */
class SettingsTelnetserver extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_telnetserver';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'telnetport'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
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
            'telnetport' => Yii::t('app', 'Telnet Port'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
