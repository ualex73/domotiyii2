<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_mochad".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $tcphost
 * @property integer $tcpport
 * @property integer $globalX10
 * @property integer $debug
 */
class SettingsMochad extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_mochad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'tcpport'], 'integer'],
            [['enabled', 'globalX10', 'debug'], 'boolean'],
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
            'tcphost' => Yii::t('app', 'TCP Host'),
            'tcpport' => Yii::t('app', 'TCP Port'),
            'globalX10' => Yii::t('app', 'Global X10'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
