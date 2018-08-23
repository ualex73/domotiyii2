<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_xbmcxpl".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $rxaddress
 * @property string $txaddress
 * @property integer $debug
 */
class SettingsXbmcxpl extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_xbmcxpl';
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
            [['rxaddress', 'txaddress'], 'string', 'max' => 64],
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
            'rxaddress' => Yii::t('app', 'Rxaddress'),
            'txaddress' => Yii::t('app', 'Txaddress'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
