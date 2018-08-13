<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "device_values".
 *
 * @property integer $id
 * @property integer $device_id
 * @property integer $valuenum
 * @property string $value
 * @property string $correction
 * @property string $units
 * @property integer $log
 * @property integer $logdisplay
 * @property integer $logspeak
 * @property integer $rrd
 * @property integer $graph
 * @property string $valuerrddsname
 * @property string $valuerrdtype
 * @property string $lastchanged
 * @property string $lastseen
 * @property string $description
 * @property integer $type_id
 * @property integer $feedback
 * @property integer $control
 */
class DeviceValues extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'device_values';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['device_id', 'valuenum'], 'required'],
            [['device_id', 'valuenum', 'type_id'], 'integer'],
            [['value', 'correction'], 'string'],
            [['log', 'logdisplay', 'logspeak', 'rrd', 'graph', 'feedback', 'control'], 'boolean'],
            [['lastchanged', 'lastseen'], 'safe'],
            [['units', 'valuerrddsname', 'valuerrdtype', 'description'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'device_id' => Yii::t('app', 'Device ID'),
            'valuenum' => Yii::t('app', 'Valuenum'),
            'value' => Yii::t('app', 'Value'),
            'correction' => Yii::t('app', 'Correction'),
            'units' => Yii::t('app', 'Units'),
            'log' => Yii::t('app', 'Log'),
            'logdisplay' => Yii::t('app', 'Logdisplay'),
            'logspeak' => Yii::t('app', 'Logspeak'),
            'rrd' => Yii::t('app', 'Rrd'),
            'graph' => Yii::t('app', 'Graph'),
            'valuerrddsname' => Yii::t('app', 'Valuerrddsname'),
            'valuerrdtype' => Yii::t('app', 'Valuerrdtype'),
            'lastchanged' => Yii::t('app', 'Lastchanged'),
            'lastseen' => Yii::t('app', 'Lastseen'),
            'description' => Yii::t('app', 'Description'),
            'type_id' => Yii::t('app', 'Type ID'),
            'feedback' => Yii::t('app', 'Feedback'),
            'control' => Yii::t('app', 'Control'),
        ];
    }
}
