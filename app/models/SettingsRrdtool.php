<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_rrdtool".
 *
 * @property integer $id
 * @property integer $polltime
 * @property integer $enabled
 * @property integer $debug
 * @property integer $width
 * @property integer $height
 * @property string $rra
 */
class SettingsRrdtool extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_rrdtool';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'polltime', 'width', 'height'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['rra'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'polltime' => Yii::t('app', 'Poll Interval'),
            'enabled' => Yii::t('app', 'Enabled'),
            'debug' => Yii::t('app', 'Debug'),
            'width' => Yii::t('app', 'Graph Width'),
            'height' => Yii::t('app', 'Graph Height'),
            'rra' => Yii::t('app', 'Rra'),
        ];
    }
}
