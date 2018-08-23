<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_broadcastudp".
 *
 * @property integer $id
 * @property integer $enabled
 * @property integer $udpport
 * @property string $targetip
 * @property integer $debug
 */
class SettingsBroadcastudp extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_broadcastudp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'udpport'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['targetip'], 'string', 'max' => 32],
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
            'udpport' => Yii::t('app', 'Udpport'),
            'targetip' => Yii::t('app', 'Targetip'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
