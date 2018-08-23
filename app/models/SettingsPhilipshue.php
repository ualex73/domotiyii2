<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_philipshue".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $username
 * @property integer $polltime
 * @property integer $debug
 */
class SettingsPhilipshue extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_philipshue';
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
            [['username'], 'string', 'max' => 44],
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
            'username' => Yii::t('app', 'Username'),
            'polltime' => Yii::t('app', 'Polltime'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
