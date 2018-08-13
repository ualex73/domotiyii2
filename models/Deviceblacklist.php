<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "deviceblacklist".
 *
 * @property integer $blid
 * @property string $address
 * @property string $comments
 * @property integer $id
 */
class Deviceblacklist extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'deviceblacklist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comments'], 'string'],
            [['id'], 'integer'],
            [['address'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'blid' => Yii::t('app', 'Blid'),
            'address' => Yii::t('app', 'Address'),
            'comments' => Yii::t('app', 'Comments'),
            'id' => Yii::t('app', 'ID'),
        ];
    }
}
