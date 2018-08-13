<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "floors".
 *
 * @property integer $floor
 * @property string $name
 * @property string $image
 */
class Floors extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'floors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'image'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'floor' => Yii::t('app', 'Floor'),
            'name' => Yii::t('app', 'Name'),
            'image' => Yii::t('app', 'Image'),
        ];
    }
}
