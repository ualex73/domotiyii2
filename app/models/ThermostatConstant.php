<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "thermostat_constant".
 *
 * @property integer $id
 * @property string $name
 * @property string $value
 * @property string $description
 * @property integer $color
 */
class ThermostatConstant extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'thermostat_constant';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value'], 'number'],
            [['description'], 'string'],
            [['color'], 'required'],
            [['color'], 'integer'],
            [['name'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'value' => Yii::t('app', 'Value'),
            'description' => Yii::t('app', 'Description'),
            'color' => Yii::t('app', 'Color'),
        ];
    }
}
