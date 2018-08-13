<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_fritzbox".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $tcphost
 * @property integer $debug
 */
class SettingsFritzbox extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_fritzbox';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['tcphost'], 'string', 'max' => 32],
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
            'tcphost' => Yii::t('app', 'Tcphost'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
