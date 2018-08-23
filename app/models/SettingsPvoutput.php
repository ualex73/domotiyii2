<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_pvoutput".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $api
 * @property string $pvoutputid
 * @property integer $pushtime
 * @property integer $debug
 * @property integer $deviceid
 * @property string $devicevalue
 * @property integer $usagedeviceid
 * @property string $usagedevicevalue
 * @property integer $tempdeviceid
 * @property string $tempdevicevalue
 */
class SettingsPvoutput extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_pvoutput';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'deviceid', 'devicevalue', 'usagedeviceid', 'usagedevicevalue', 'tempdeviceid', 'tempdevicevalue'], 'required'],
            [['id', 'pushtime', 'deviceid', 'usagedeviceid', 'tempdeviceid'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['api', 'pvoutputid'], 'string', 'max' => 64],
            [['devicevalue', 'usagedevicevalue', 'tempdevicevalue'], 'string', 'max' => 8],
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
            'api' => Yii::t('app', 'API key'),
            'pvoutputid' => Yii::t('app', 'Pvoutput Id'),
            'pushtime' => Yii::t('app', 'Pushtime'),
            'debug' => Yii::t('app', 'Debug'),
            'deviceid' => Yii::t('app', 'PvDevice Id'),
            'devicevalue' => Yii::t('app', 'PvDevice Value'),
            'usagedeviceid' => Yii::t('app', 'Usagedevice Id'),
            'usagedevicevalue' => Yii::t('app', 'Usagedevice Value'),
            'tempdeviceid' => Yii::t('app', 'Tempdevice Id'),
            'tempdevicevalue' => Yii::t('app', 'Tempdevice Value'),
        ];
    }
}
