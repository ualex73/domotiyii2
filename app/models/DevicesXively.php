<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "devices_xively".
 *
 * @property integer $id
 * @property string $datastreamid
 * @property string $tags
 * @property string $devicename
 * @property integer $deviceid
 * @property string $devicelabel
 * @property string $units
 * @property string $unittype
 * @property string $value
 */
class DevicesXively extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'devices_xively';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deviceid'], 'integer'],
            [['value'], 'string'],
            [['datastreamid'], 'string', 'max' => 64],
            [['tags', 'devicename', 'units'], 'string', 'max' => 32],
            [['devicelabel', 'unittype'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'datastreamid' => Yii::t('app', 'Datastreamid'),
            'tags' => Yii::t('app', 'Tags'),
            'devicename' => Yii::t('app', 'Devicename'),
            'deviceid' => Yii::t('app', 'Deviceid'),
            'devicelabel' => Yii::t('app', 'Devicelabel'),
            'units' => Yii::t('app', 'Units'),
            'unittype' => Yii::t('app', 'Unittype'),
            'value' => Yii::t('app', 'Value'),
        ];
    }
}
