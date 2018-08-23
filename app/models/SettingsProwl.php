<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_prowl".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $apikey
 * @property string $application
 * @property string $event
 * @property integer $debug
 */
class SettingsProwl extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_prowl';
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
            [['apikey'], 'string', 'max' => 64],
            [['application', 'event'], 'string', 'max' => 32],
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
            'apikey' => Yii::t('app', 'Prowl API key'),
            'application' => Yii::t('app', 'Application'),
            'event' => Yii::t('app', 'Event'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
