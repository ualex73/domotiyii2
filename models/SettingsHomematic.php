<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_homematic".
 *
 * @property integer $id
 * @property integer $enabled
 * @property integer $debug
 * @property string $tcphost
 * @property string $hmid
 * @property string $type
 * @property integer $model
 * @property integer $tcpport
 */
class SettingsHomematic extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_homematic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tcpport'], 'required'],
            [['id', 'model', 'tcpport'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['tcphost', 'hmid', 'type'], 'string', 'max' => 32],
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
            'debug' => Yii::t('app', 'Debug'),
            'tcphost' => Yii::t('app', 'Tcphost'),
            'hmid' => Yii::t('app', 'Hmid'),
            'type' => Yii::t('app', 'Type'),
            'model' => Yii::t('app', 'Model'),
            'tcpport' => Yii::t('app', 'Tcpport'),
        ];
    }
}
