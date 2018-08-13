<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "thermostat_schedule".
 *
 * @property integer $scenario_id
 * @property integer $heating_id
 * @property string $description
 */
class ThermostatSchedule extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'thermostat_schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['scenario_id', 'heating_id'], 'required'],
            [['scenario_id', 'heating_id'], 'integer'],
            [['description'], 'string'],
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
            'description' => Yii::t('app', 'Description'),
        ];
    }
}
