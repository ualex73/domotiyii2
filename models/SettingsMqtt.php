<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "settings_mqtt".
 *
 * @property int $id
 * @property int $enabled
 * @property string $tcphost
 * @property int $tcpport
 * @property string $username
 * @property string $password
 * @property string $pubtopic
 * @property string $subtopic
 * @property int $heartbeat
 * @property int $retain
 * @property int $qos
 * @property int $debug
 * @property string $clientname
 * @property int $enablepublish
 * @property int $enablesubscribe
 * @property int $sslenabled
 * @property int $sslcertificate_id
 * @property int $birthlastwill
 * @property int $sendallvalues
 */
class SettingsMqtt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'settings_mqtt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'enabled', 'tcpport', 'heartbeat', 'retain', 'qos', 'debug', 'enablepublish', 'enablesubscribe', 'sslenabled', 'sslcertificate_id', 'birthlastwill', 'sendallvalues'], 'integer'],
            [['subtopic'], 'string'],
            [['tcphost', 'username', 'password'], 'string', 'max' => 64],
            [['pubtopic'], 'string', 'max' => 256],
            [['clientname'], 'string', 'max' => 23],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'enabled' => 'Enabled',
            'tcphost' => 'Tcp host',
            'tcpport' => 'Tcp port',
            'username' => 'Username',
            'password' => 'Password',
            'pubtopic' => 'Publish topic',
            'subtopic' => 'Subscriber topic',
            'heartbeat' => 'Heartbeat',
            'retain' => 'Retain',
            'qos' => 'Qos',
            'debug' => 'Debug',
            'clientname' => 'Client name',
            'enablepublish' => 'Publish',
            'enablesubscribe' => 'Subscribe',
            'sslenabled' => 'SSL Enabled',
            'sslcertificate_id' => 'SSL Certificate ID',
            'birthlastwill' => 'Birth and Last Will',
            'sendallvalues' => 'Send All Values',
        ];
    }
}
