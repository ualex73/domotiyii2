<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_hddtemp".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $tcphost
 * @property integer $tcpport
 * @property integer $polltime
 * @property integer $threshold
 * @property integer $debug
 */
class SettingsHddtemp extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_hddtemp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'tcpport', 'polltime', 'threshold'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['tcphost'], 'string', 'max' => 32],
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
            'tcphost' => Yii::t('app', 'TCP Host'),
            'tcpport' => Yii::t('app', 'TCP Port'),
            'polltime' => Yii::t('app', 'Poll Interval'),
            'threshold' => Yii::t('app', 'Threshold'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
