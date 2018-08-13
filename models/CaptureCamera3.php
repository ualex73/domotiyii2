<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "capture_camera3".
 *
 * @property integer $id
 * @property string $stamp
 * @property resource $image
 */
class CaptureCamera3 extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'capture_camera3';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stamp'], 'safe'],
            [['image'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'stamp' => Yii::t('app', 'Stamp'),
            'image' => Yii::t('app', 'Image'),
        ];
    }
}
