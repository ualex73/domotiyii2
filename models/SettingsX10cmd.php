<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_x10cmd".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $command
 * @property integer $monitor
 * @property integer $globalx10
 * @property integer $type
 * @property integer $debug
 */
class SettingsX10cmd extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_x10cmd';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'type'], 'integer'],
            [['enabled', 'monitor', 'globalx10', 'debug'], 'boolean'],
            [['command'], 'string', 'max' => 128],
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
            'command' => Yii::t('app', 'Command'),
            'monitor' => Yii::t('app', 'Monitor'),
            'globalx10' => Yii::t('app', 'Globalx10'),
            'type' => Yii::t('app', 'Type'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
