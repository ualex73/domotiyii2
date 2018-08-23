<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_serverstats".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $servername
 * @property integer $debug
 */
class SettingsServerstats extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_serverstats';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['enabled', 'debug'], 'boolean'],
            [['servername'], 'string', 'max' => 32],
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
            'servername' => Yii::t('app', 'Server name'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
