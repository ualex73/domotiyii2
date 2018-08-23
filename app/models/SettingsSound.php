<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_sound".
 *
 * @property integer $id
 * @property integer $enabled
 * @property integer $debug
 * @property integer $volume
 */
class SettingsSound extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_sound';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'volume'], 'integer'],
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
            'debug' => Yii::t('app', 'Debug'),
            'volume' => Yii::t('app', 'Volume'),
        ];
    }
}
