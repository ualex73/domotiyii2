<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_k8055".
 *
 * @property integer $id
 * @property integer $enabled
 * @property integer $polltime
 * @property integer $boardaddress
 * @property integer $debouncetime1
 * @property integer $debouncetime2
 * @property integer $debug
 */
class SettingsK8055 extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_k8055';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'polltime', 'boardaddress', 'debouncetime1', 'debouncetime2'], 'integer'],
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
            'boardaddress' => Yii::t('app', 'Board address'),
            'debouncetime1' => Yii::t('app', 'Debounce time1'),
            'debouncetime2' => Yii::t('app', 'Debounce time2'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
