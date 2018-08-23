<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_iviewer".
 *
 * @property integer $id
 * @property integer $enabled
 * @property integer $tcpport
 * @property string $password
 * @property integer $debug
 */
class SettingsIviewer extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_iviewer';
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
            [['password'], 'string', 'max' => 64],
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
            'tcpport' => Yii::t('app', 'Tcpport'),
            'password' => Yii::t('app', 'Password'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
