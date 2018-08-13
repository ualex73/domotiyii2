<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_openzwave".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $serialport
 * @property string $baudrate
 * @property integer $reloadnodes
 * @property integer $polltime
 * @property integer $debug
 * @property string $polltimesleeping
 * @property integer $enablepollsleeping
 * @property integer $enablepolllistening
 * @property string $polltimelistening
 * @property string $updateneighbor
 * @property integer $enableupdateneighbor
 */
class SettingsOpenzwave extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_openzwave';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'polltime'], 'integer'],
            [['enabled', 'reloadnodes', 'debug', 'enablepollsleeping', 'enablepolllistening', 'enableupdateneighbor'], 'boolean'],
            [['serialport'], 'string', 'max' => 128],
            [['baudrate'], 'string', 'max' => 32],
            [['polltimesleeping', 'polltimelistening', 'updateneighbor'], 'string', 'max' => 16],
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
            'serialport' => Yii::t('app', 'Serialport'),
            'baudrate' => Yii::t('app', 'Baudrate'),
            'reloadnodes' => Yii::t('app', 'Reloadnodes'),
            'polltime' => Yii::t('app', 'Polltime'),
            'debug' => Yii::t('app', 'Debug'),
            'polltimesleeping' => Yii::t('app', 'Polltimesleeping'),
            'enablepollsleeping' => Yii::t('app', 'Enablepollsleeping'),
            'enablepolllistening' => Yii::t('app', 'Enablepolllistening'),
            'polltimelistening' => Yii::t('app', 'Polltimelistening'),
            'updateneighbor' => Yii::t('app', 'Updateneighbor'),
            'enableupdateneighbor' => Yii::t('app', 'Enableupdateneighbor'),
        ];
    }
}
