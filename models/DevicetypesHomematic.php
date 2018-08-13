<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "devicetypes_homematic".
 *
 * @property integer $id
 * @property integer $moduleref
 * @property string $type
 * @property string $subtype
 * @property string $commands
 * @property string $values
 * @property string $type_code
 * @property string $subtype_code
 */
class DevicetypesHomematic extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'devicetypes_homematic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['moduleref'], 'integer'],
            [['type'], 'required'],
            [['commands', 'values'], 'string'],
            [['type', 'subtype'], 'string', 'max' => 32],
            [['type_code', 'subtype_code'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'moduleref' => Yii::t('app', 'Moduleref'),
            'type' => Yii::t('app', 'Type'),
            'subtype' => Yii::t('app', 'Subtype'),
            'commands' => Yii::t('app', 'Commands'),
            'values' => Yii::t('app', 'Values'),
            'type_code' => Yii::t('app', 'Type Code'),
            'subtype_code' => Yii::t('app', 'Subtype Code'),
        ];
    }
}
