<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_xpl".
 *
 * @property integer $id
 * @property integer $enabled
 * @property integer $heartbeat
 * @property integer $debug
 */
class SettingsXpl extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_xpl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'heartbeat'], 'integer'],
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
            'heartbeat' => Yii::t('app', 'Heartbeat'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
