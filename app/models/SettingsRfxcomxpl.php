<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_rfxcomxpl".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $rxaddress
 * @property string $txaddress
 * @property integer $oldaddrfmt
 * @property integer $globalx10
 * @property integer $debug
 */
class SettingsRfxcomxpl extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_rfxcomxpl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['enabled', 'oldaddrfmt', 'globalx10', 'debug'], 'boolean'],
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
            'rxaddress' => Yii::t('app', 'Rx address'),
            'txaddress' => Yii::t('app', 'Tx address'),
            'oldaddrfmt' => Yii::t('app', 'Oldaddrfmt'),
            'globalx10' => Yii::t('app', 'Globalx10'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
