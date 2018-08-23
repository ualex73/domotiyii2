<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_smartvisuserver".
 *
 * @property integer $id
 * @property integer $enabled
 * @property integer $tcpport
 * @property integer $debug
 */
class SettingsSmartvisuserver extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_smartvisuserver';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'tcpport'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
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
            'tcpport' => Yii::t('app', 'Tcp Port'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
