<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_ezcontrol".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $udphost
 * @property integer $debug
 */
class SettingsEzcontrol extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_ezcontrol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['udphost'], 'string', 'max' => 32],
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
            'udphost' => Yii::t('app', 'Udphost'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
