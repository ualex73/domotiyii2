<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_p2000".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $regios
 * @property integer $messages
 * @property string $discipline
 * @property string $filter
 * @property integer $georange
 * @property integer $fetchimage
 * @property integer $maplink
 * @property integer $polltime
 * @property integer $debug
 */
class SettingsP2000 extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_p2000';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'messages', 'georange', 'polltime'], 'integer'],
            [['enabled', 'fetchimage', 'maplink', 'debug'], 'boolean'],
            [['regios', 'discipline', 'filter'], 'string', 'max' => 64],
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
            'regios' => Yii::t('app', 'Regios'),
            'messages' => Yii::t('app', 'Messages'),
            'discipline' => Yii::t('app', 'Discipline'),
            'filter' => Yii::t('app', 'Filter'),
            'georange' => Yii::t('app', 'Georange'),
            'fetchimage' => Yii::t('app', 'Fetchimage'),
            'maplink' => Yii::t('app', 'Maplink'),
            'polltime' => Yii::t('app', 'Poll Interval'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
