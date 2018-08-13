<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "water_usage".
 *
 * @property integer $id
 * @property integer $counter
 * @property string $stamp
 * @property integer $consumption
 */
class WaterUsage extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'water_usage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['counter', 'consumption'], 'integer'],
            [['stamp'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'counter' => Yii::t('app', 'Counter'),
            'stamp' => Yii::t('app', 'Stamp'),
            'consumption' => Yii::t('app', 'Consumption'),
        ];
    }
}
