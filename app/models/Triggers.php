<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "triggers".
 *
 * @property integer $id
 * @property string $name
 * @property integer $type
 * @property string $description
 * @property string $param1
 * @property string $param2
 * @property string $param3
 * @property string $param4
 * @property string $param5
 */
class Triggers extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'triggers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'integer'],
            [['description', 'param1', 'param2', 'param3', 'param4', 'param5'], 'string'],
            [['name','type'],'required'],
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
            'type' => Yii::t('app', 'Type'),
            'description' => Yii::t('app', 'Description'),
            'param1' => Yii::t('app', 'Param1'),
            'param2' => Yii::t('app', 'Param2'),
            'param3' => Yii::t('app', 'Param3'),
            'param4' => Yii::t('app', 'Param4'),
            'param5' => Yii::t('app', 'Param5'),
        ];
    }

    /**
     * Define trigger names
     */
    private $triggernames = [
        '1' => 'Time Now',
        '2' => 'GlobalVar Change',
        '3' => 'Device Change',
        '4' => 'IR Remote Received',
        '5' => 'iViewer Remote Received',
        '6' => 'Multi Trigger',
        '7' => 'Manually',
        '8' => 'Device Lastseen',
    ];

    /**
     * @return array with all triggertypes texts
     */
    public function getAllTriggerTypes()
    {
        return $this->triggernames;
    }

    /**
     * @return triggername for $trigger
     */
    public function getTriggerText($trigger)
    {
        return isset($this->triggernames[$trigger]) ? $this->triggernames[$trigger] : null;
    }

    /**
     * @return dropdownlist with the list of triggers
     */
    public function getAllTriggers()
    {
        return CHtml::listData(Triggers::model()->findAll(array('order'=>'name ASC')), 'id', 'name');
    }

}
