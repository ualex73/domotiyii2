<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "devicetypes".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $protocol
 * @property string $addressformat
 */
class Devicetypes extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'devicetypes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'string', 'max' => 64],
            [['protocol'], 'string', 'max' => 32],
            [['addressformat'], 'string', 'max' => 128],
            [['name','addressformat','protocol'],'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'protocol' => Yii::t('app', 'Protocol'),
            'addressformat' => Yii::t('app', 'Addressformat'),
        ];
    }
}
