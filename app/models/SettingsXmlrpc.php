<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_xmlrpc".
 *
 * @property integer $id
 * @property integer $enabled
 * @property integer $httpport
 * @property integer $maxconn
 * @property integer $debug
 * @property integer $broadcastudp
 */
class SettingsXmlrpc extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_xmlrpc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'httpport', 'maxconn'], 'integer'],
            [['enabled', 'debug', 'broadcastudp'], 'boolean'],
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
            'httpport' => Yii::t('app', 'XMl-Rpc Port'),
            'maxconn' => Yii::t('app', 'Max connections'),
            'debug' => Yii::t('app', 'Debug'),
            'broadcastudp' => Yii::t('app', 'Broadcastudp'),
        ];
    }
}
