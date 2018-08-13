<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "devices".
 *
 * @property integer $id
 * @property integer $instance_id
 * @property string $name
 * @property string $address
 * @property integer $devicetype_id
 * @property integer $location_id
 * @property string $onicon
 * @property string $officon
 * @property string $dimicon
 * @property integer $interface_id
 * @property string $firstseen
 * @property string $lastseen
 * @property integer $enabled
 * @property integer $hide
 * @property string $groups
 * @property string $batterystatus
 * @property integer $tampered
 * @property string $comments
 * @property integer $switchable
 * @property integer $dimable
 * @property integer $extcode
 * @property integer $x
 * @property integer $y
 * @property integer $floorplan_id
 * @property string $lastchanged
 * @property integer $repeatstate
 * @property integer $repeatperiod
 * @property integer $reset
 * @property integer $resetperiod
 * @property string $resetvalue
 * @property integer $poll
 */
class Devices extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'devices';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['instance_id', 'devicetype_id', 'location_id', 'interface_id', 'x', 'y', 'floorplan_id', 'repeatperiod', 'resetperiod'], 'integer'],
            [['firstseen', 'lastseen', 'lastchanged'], 'safe'],
            [['enabled', 'hide', 'tampered', 'switchable', 'dimable', 'extcode', 'repeatstate', 'reset', 'poll'], 'boolean'],
            [['comments', 'resetvalue'], 'string'],
            [['name', 'address'], 'string', 'max' => 64],
            [['onicon', 'officon', 'dimicon', 'batterystatus'], 'string', 'max' => 32],
            [['groups'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'instance_id' => Yii::t('app', 'Instance ID'),
            'name' => Yii::t('app', 'Name'),
            'address' => Yii::t('app', 'Address'),
            'devicetype_id' => Yii::t('app', 'Devicetype ID'),
            'location_id' => Yii::t('app', 'Location ID'),
            'onicon' => Yii::t('app', 'Onicon'),
            'officon' => Yii::t('app', 'Officon'),
            'dimicon' => Yii::t('app', 'Dimicon'),
            'interface_id' => Yii::t('app', 'Interface ID'),
            'firstseen' => Yii::t('app', 'Firstseen'),
            'lastseen' => Yii::t('app', 'Lastseen'),
            'enabled' => Yii::t('app', 'Enabled'),
            'hide' => Yii::t('app', 'Hide'),
            'groups' => Yii::t('app', 'Groups'),
            'batterystatus' => Yii::t('app', 'Batterystatus'),
            'tampered' => Yii::t('app', 'Tampered'),
            'comments' => Yii::t('app', 'Comments'),
            'switchable' => Yii::t('app', 'Switchable'),
            'dimable' => Yii::t('app', 'Dimable'),
            'extcode' => Yii::t('app', 'Extcode'),
            'x' => Yii::t('app', 'X'),
            'y' => Yii::t('app', 'Y'),
            'floorplan_id' => Yii::t('app', 'Floorplan ID'),
            'lastchanged' => Yii::t('app', 'Lastchanged'),
            'repeatstate' => Yii::t('app', 'Repeatstate'),
            'repeatperiod' => Yii::t('app', 'Repeatperiod'),
            'reset' => Yii::t('app', 'Reset'),
            'resetperiod' => Yii::t('app', 'Resetperiod'),
            'resetvalue' => Yii::t('app', 'Resetvalue'),
            'poll' => Yii::t('app', 'Poll'),
        ];
    }
}
