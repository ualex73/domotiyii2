<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
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
            [['name','address','devicetype_id','interface_id'],'required'],
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
            'devicetype_id' => Yii::t('app', 'Device Type '),
            'location_id' => Yii::t('app', 'Location'),
            'onicon' => Yii::t('app', 'Onicon'),
            'officon' => Yii::t('app', 'Officon'),
            'dimicon' => Yii::t('app', 'Dimicon'),
            'interface_id' => Yii::t('app', 'Interface'),
            'firstseen' => Yii::t('app', 'Firstseen'),
            'lastseen' => Yii::t('app', 'Lastseen'),
            'enabled' => Yii::t('app', 'Enabled'),
            'hide' => Yii::t('app', 'Hide device'),
            'groups' => Yii::t('app', 'Groups'),
            'batterystatus' => Yii::t('app', 'Batterystatus'),
            'tampered' => Yii::t('app', 'Tampered'),
            'comments' => Yii::t('app', 'Comments'),
            'switchable' => Yii::t('app', 'Device can be switched'),
            'dimable' => Yii::t('app', 'Device can be dimmed'),
            'extcode' => Yii::t('app', 'Supports extended X10'),
            'x' => Yii::t('app', 'X'),
            'y' => Yii::t('app', 'Y'),
            'floorplan_id' => Yii::t('app', 'Floorplan ID'),
            'lastchanged' => Yii::t('app', 'Lastchanged'),
            'repeatstate' => Yii::t('app', 'Repeat state enabled'),
            'repeatperiod' => Yii::t('app', 'Repeat period'),
            'reset' => Yii::t('app', 'Reset status enabled'),
            'resetperiod' => Yii::t('app', 'Reset period'),
            'resetvalue' => Yii::t('app', 'Reset value'),
            'poll' => Yii::t('app', 'Poll device(Z-Wave Only)'),
        ];
    }

    public function getDeviceType()
    {
        return $this->hasOne(Devicetypes::className(), ['id' => 'devicetype_id']);
    }

    public function getLocation()
    {
        return $this->hasOne(Locations::className(), ['id' => 'location_id']);
    }

    public function getInterface()
    {
        return $this->hasOne(Plugins::className(), ['id' => 'interface_id']);
    }

    public function getDeviceValue1()
    {
        return $this->hasOne(DeviceValues::className(), ['device_id' => 'id'])->where([ 'valuenum' => 1]);
    }

    public function getDeviceValue2()
    {
        return $this->hasOne(DeviceValues::className(), ['device_id' => 'id'])->where([ 'valuenum' => 2]);
    }

    public function getDeviceValue3()
    {
        return $this->hasOne(DeviceValues::className(), ['device_id' => 'id'])->where([ 'valuenum' => 3]);
    }

    public function getDeviceValue4()
    {
        return $this->hasOne(DeviceValues::className(), ['device_id' => 'id'])->where([ 'valuenum' => 4]);
    }

    public function getFloors()
    {
        return ArrayHelper::map(Floors::find()->orderBy('name')->all(), 'floor', 'name');
    }

    public function getLocations()
    {
        return ArrayHelper::map(Locations::find()->orderBy('name')->all(), 'id', 'name');
    }

    public function getGroups()
    {
        return ArrayHelper::map(Groups::find()->orderBy('name')->all(), 'id', 'name');
    }


    public function getIcons() {
        $lst = glob('../web/icons/*.*');
        $listSelect = array();
        $listSelect[""] = "";
        foreach ($lst as $l) {
            $l = str_replace('../web/icons/', '', $l);
            $listSelect[$l] = $l;
        }
        return $listSelect;
    }
    public function getSPdevice() {
        if ($this->devicetype_id == 243)
            return TRUE;
        else if (strpos($this->deviceValue1->value, 'SP ') === 0)
            return TRUE;
        else
            return FALSE;
    }
    public function getIconsOptions() {
        $lst = glob('icons/*.*');
        $listSelect = array();
        $listSelect[""] = "";

        foreach ($lst as $l) {
            $l = str_replace('icons/', '', $l);
            $option[$l] = array("data-image" => '/domotiyii2/static/icons/' . $l);
        }
        $options["options"] = $option;
        return $options;
    }
}
