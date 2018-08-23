<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_pwrctrl".
 *
 * @property integer $id
 * @property integer $enabled
 * @property integer $udpread
 * @property integer $udpsend
 * @property string $userpw
 * @property integer $debug
 */
class SettingsPwrctrl extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_pwrctrl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'udpread', 'udpsend'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['userpw'], 'string', 'max' => 32],
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
            'udpread' => Yii::t('app', 'Udp readport'),
            'udpsend' => Yii::t('app', 'Udp sendport'),
            'userpw' => Yii::t('app', 'Password'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
