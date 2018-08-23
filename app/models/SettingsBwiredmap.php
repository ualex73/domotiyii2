<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_bwiredmap".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $website
 * @property string $websitepicurl
 * @property string $title
 * @property string $city
 * @property string $user
 * @property string $password
 * @property string $screenname
 * @property string $gpslat
 * @property string $gpslong
 * @property integer $pushtime
 * @property integer $debug
 */
class SettingsBwiredmap extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_bwiredmap';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'pushtime'], 'integer'],
            [['enabled', 'debug'], 'boolean'],
            [['website', 'websitepicurl', 'title', 'city', 'user', 'password', 'screenname', 'gpslat', 'gpslong'], 'string', 'max' => 64],
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
            'website' => Yii::t('app', 'Website'),
            'websitepicurl' => Yii::t('app', 'Website picurl'),
            'title' => Yii::t('app', 'Title'),
            'city' => Yii::t('app', 'City'),
            'user' => Yii::t('app', 'User'),
            'password' => Yii::t('app', 'Password'),
            'screenname' => Yii::t('app', 'Screenname'),
            'gpslat' => Yii::t('app', 'Gps latitude'),
            'gpslong' => Yii::t('app', 'Gps longitude'),
            'pushtime' => Yii::t('app', 'Push time'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
