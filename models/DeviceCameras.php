<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "devices_camera".
 *
 * @property string $id
 * @property string $name
 * @property string $type
 * @property string $cmdoptions
 * @property string $viewstring
 * @property string $grabstring
 * @property string $ptztype
 * @property string $ptzbaseurl
 * @property string $description
 * @property int $viscaaddress
 * @property string $username
 * @property string $passwd
 * @property int $enabled
 */
class DeviceCameras extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'devices_camera';
    }
    private $cameratypes = array(
        'Video4Linux' => 'Video4Linux',
        'Fetch Image' => 'Fetch Image',
        'Stream MJPEG' => 'Stream MJPEG',
    );
    /**
     * Define cameraptztypes
     */
    private $cameraptztypes = array(
        'Sony VISCA' => 'Sony VISCA',
        'Axis API' => 'Axis API',
        'Watchbot API' => 'Watchbot API',
    );

    /**
     * @return array with all cameraptztypes
     */
    public function getAllCameraPTZTypes()
    {
        return $this->cameraptztypes;
    }
    /**
     * @return array with all cameratypes
     */
    public function getAllCameraTypes()
    {
        return $this->cameratypes;
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cmdoptions', 'viewstring', 'grabstring', 'ptzbaseurl'], 'string'],
            [['viscaaddress', 'enabled'], 'integer'],
            [['name', 'username', 'passwd'], 'string', 'max' => 64],
            [['type', 'ptztype'], 'string', 'max' => 32],
            [['description'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'type' => Yii::t('app', 'Type'),
            'cmdoptions' => Yii::t('app', 'Cmdoptions'),
            'viewstring' => Yii::t('app', 'Viewstring'),
            'grabstring' => Yii::t('app', 'Grabstring'),
            'ptztype' => Yii::t('app', 'Ptztype'),
            'ptzbaseurl' => Yii::t('app', 'Ptzbaseurl'),
            'description' => Yii::t('app', 'Description'),
            'viscaaddress' => Yii::t('app', 'Viscaaddress'),
            'username' => Yii::t('app', 'Username'),
            'passwd' => Yii::t('app', 'Passwd'),
            'enabled' => Yii::t('app', 'Enabled'),
        ];
    }

}
