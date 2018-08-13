<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "plugins".
 *
 * @property integer $id
 * @property string $interface
 * @property string $protocols
 * @property string $name
 * @property string $type
 * @property integer $maxinstances
 */
class Plugins extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'plugins';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['protocols', 'name'], 'required'],
            [['maxinstances'], 'integer'],
            [['interface', 'name', 'type'], 'string', 'max' => 32],
            [['protocols'], 'string', 'max' => 1024],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'interface' => Yii::t('app', 'Interface'),
            'protocols' => Yii::t('app', 'Protocols'),
            'name' => Yii::t('app', 'Name'),
            'type' => Yii::t('app', 'Type'),
            'maxinstances' => Yii::t('app', 'Maxinstances'),
        ];
    }
}
