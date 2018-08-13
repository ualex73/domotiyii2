<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "thermostat_schedule_entry".
 *
 * @property integer $scenario_id
 * @property integer $heating_id
 * @property integer $day
 * @property string $time
 * @property integer $constant_id
 * @property integer $secondary
 */
class ThermostatScheduleEntry extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'thermostat_schedule_entry';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['scenario_id', 'heating_id', 'day', 'time', 'constant_id', 'secondary'], 'required'],
            [['scenario_id', 'heating_id', 'day', 'constant_id'], 'integer'],
            [['time'], 'safe'],
            [['secondary'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'scenario_id' => Yii::t('app', 'Scenario ID'),
            'heating_id' => Yii::t('app', 'Heating ID'),
            'day' => Yii::t('app', 'Day'),
            'time' => Yii::t('app', 'Time'),
            'constant_id' => Yii::t('app', 'Constant ID'),
            'secondary' => Yii::t('app', 'Secondary'),
        ];
    }
}
