<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_callerid".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $countrycode
 * @property string $areacode
 * @property string $prefixnational
 * @property string $prefixinternational
 * @property integer $autocreatecontacts
 * @property integer $debug
 */
class SettingsCallerid extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_callerid';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['enabled', 'autocreatecontacts', 'debug'], 'boolean'],
            [['countrycode', 'areacode', 'prefixnational', 'prefixinternational'], 'string', 'max' => 16],
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
            'countrycode' => Yii::t('app', 'Countrycode'),
            'areacode' => Yii::t('app', 'Areacode'),
            'prefixnational' => Yii::t('app', 'Prefix national'),
            'prefixinternational' => Yii::t('app', 'Prefix international'),
            'autocreatecontacts' => Yii::t('app', 'Autocreate contacts'),
            'debug' => Yii::t('app', 'Debug'),
        ];
    }
}
