<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_main".
 *
 * @property integer $id
 * @property integer $sleeptime
 * @property integer $flushtime
 * @property integer $debug
 * @property integer $logbuffer
 * @property integer $authentication
 * @property string $startpage
 * @property integer $debugevents
 * @property integer $debugdevices
 * @property integer $debugenergy
 * @property integer $debugplugin
 * @property integer $debugglobalvar
 * @property string $hometoppanel
 * @property string $homeleftpanel
 * @property string $homerightpanel
 * @property string $homebottompanel
 * @property integer $autodevicecreate
 * @property integer $logallvalueupdates
 * @property string $logprefix
 */
class SettingsMain extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_main';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'sleeptime', 'flushtime', 'logbuffer'], 'integer'],
            [['debug', 'authentication', 'debugevents', 'debugdevices', 'debugenergy', 'debugplugin', 'debugglobalvar', 'autodevicecreate', 'logallvalueupdates'], 'boolean'],
            [['startpage'], 'string', 'max' => 32],
            [['hometoppanel', 'homeleftpanel', 'homerightpanel', 'homebottompanel'], 'string', 'max' => 256],
            [['logprefix'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'sleeptime' => Yii::t('app', 'Sleeptime'),
            'flushtime' => Yii::t('app', 'Flushtime'),
            'debug' => Yii::t('app', 'Debug Main'),
            'logbuffer' => Yii::t('app', 'Logbuffer'),
            'authentication' => Yii::t('app', 'Authentication'),
            'startpage' => Yii::t('app', 'Startpage'),
            'debugevents' => Yii::t('app', 'Debug event'),
            'debugdevices' => Yii::t('app', 'Debug device'),
            'debugenergy' => Yii::t('app', 'Debug energy'),
            'debugplugin' => Yii::t('app', 'Debug plugin'),
            'debugglobalvar' => Yii::t('app', 'Debugglobalvar'),
            'hometoppanel' => Yii::t('app', 'Hometoppanel'),
            'homeleftpanel' => Yii::t('app', 'Homeleftpanel'),
            'homerightpanel' => Yii::t('app', 'Homerightpanel'),
            'homebottompanel' => Yii::t('app', 'Homebottompanel'),
            'autodevicecreate' => Yii::t('app', 'Autocreate Devices'),
            'logallvalueupdates' => Yii::t('app', 'Log all valueupdates'),
            'logprefix' => Yii::t('app', 'Logprefix'),
        ];
    }
}
