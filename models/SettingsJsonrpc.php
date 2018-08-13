<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_jsonrpc".
 *
 * @property integer $id
 * @property integer $enabled
 * @property integer $httpport
 * @property integer $maxconn
 * @property integer $type
 * @property integer $auth
 * @property integer $debug
 * @property integer $sslenabled
 * @property integer $sslcertificate_id
 */
class SettingsJsonrpc extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings_jsonrpc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'httpport', 'maxconn', 'type', 'auth', 'sslcertificate_id'], 'integer'],
            [['enabled', 'debug', 'sslenabled'], 'boolean'],
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
            'httpport' => Yii::t('app', 'JSON-RPC Port'),
            'maxconn' => Yii::t('app', 'Max connections'),
            'type' => Yii::t('app', 'Type'),
            'auth' => Yii::t('app', 'Authentication'),
            'debug' => Yii::t('app', 'Debug'),
            'sslenabled' => Yii::t('app', 'Ssl Enabled'),
            'sslcertificate_id' => Yii::t('app', 'Sslcertificate'),
        ];
    }
}
