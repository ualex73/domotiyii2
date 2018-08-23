<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_tvguide".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $xmlgrabcmd
 * @property string $xmlfile
 * @property integer $debug
 */
class SettingsTvguide extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_tvguide';
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
            [['xmlgrabcmd', 'xmlfile'], 'string'],
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
            'xmlgrabcmd' => Yii::t('app', 'Xmlgrabcmd'),
            'xmlfile' => Yii::t('app', 'Xmlfile'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
