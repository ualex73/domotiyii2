<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_meteohub".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $fetchurl
 * @property integer $polltime
 * @property integer $debug
 */
class SettingsMeteohub extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_meteohub';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'polltime'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['fetchurl'], 'string', 'max' => 128],
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
            'fetchurl' => Yii::t('app', 'Fetchurl'),
            'polltime' => Yii::t('app', 'Polltime'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
