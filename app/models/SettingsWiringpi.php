<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_wiringpi".
 *
 * @property integer $id
 * @property integer $enabled
 * @property integer $polltime
 * @property integer $debug
 */
class SettingsWiringpi extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_wiringpi';
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
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
