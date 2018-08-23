<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_voicetext".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $engine
 * @property string $prefixcmd
 * @property string $voicesmale
 * @property string $voicesfemale
 * @property integer $debug
 */
class SettingsVoicetext extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_voicetext';
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
            [['engine', 'prefixcmd', 'voicesmale', 'voicesfemale'], 'string', 'max' => 32],
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
            'engine' => Yii::t('app', 'Engine'),
            'prefixcmd' => Yii::t('app', 'Prefix cmd'),
            'voicesmale' => Yii::t('app', 'Voices male'),
            'voicesfemale' => Yii::t('app', 'Voices female'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
