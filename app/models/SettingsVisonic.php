<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_visonic".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $serialport
 * @property string $mastercode
 * @property string $downloadcode
 * @property integer $autosynctime
 * @property integer $forcestandardmode
 * @property integer $motiontimeout
 * @property integer $sensorarmstatus
 * @property integer $debug
 * @property string $tcphost
 * @property integer $tcpport
 * @property string $type
 */
class SettingsVisonic extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_visonic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'motiontimeout', 'sensorarmstatus', 'tcpport'], 'integer'],
            [['enabled', 'autosynctime', 'forcestandardmode', 'debug'], 'boolean'],
            [['serialport'], 'string', 'max' => 128],
            [['mastercode', 'downloadcode'], 'string', 'max' => 16],
            [['tcphost', 'type'], 'string', 'max' => 32],
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
            'serialport' => Yii::t('app', 'Serial port'),
            'mastercode' => Yii::t('app', 'Master code'),
            'downloadcode' => Yii::t('app', 'Downloadcode'),
            'autosynctime' => Yii::t('app', 'Autosynctime'),
            'forcestandardmode' => Yii::t('app', 'Force standard mode'),
            'motiontimeout' => Yii::t('app', 'Motion timeout'),
            'sensorarmstatus' => Yii::t('app', 'Sensor ARM status'),
            'debug' => Yii::t('app', 'Debug'),
            'tcphost' => Yii::t('app', 'Tcphost'),
            'tcpport' => Yii::t('app', 'Tcpport'),
            'type' => Yii::t('app', 'Type'),
        ];
    }
}
