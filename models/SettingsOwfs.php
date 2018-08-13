<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_owfs".
 *
 * @property integer $id
 * @property integer $enabled
 * @property integer $polltime
 * @property string $basedir
 * @property integer $cached
 * @property integer $debug
 */
class SettingsOwfs extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_owfs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'polltime'], 'integer'],
            [['enabled', 'cached', 'debug'], 'boolean'],
            [['basedir'], 'string', 'max' => 64],
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
            'polltime' => Yii::t('app', 'Poll interval'),
            'basedir' => Yii::t('app', 'Basedir'),
            'cached' => Yii::t('app', 'Cached'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
