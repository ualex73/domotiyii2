<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "config_housemode".
 *
 * @property integer $housemode_id
 * @property string $name
 */
class ConfigHousemode extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'config_housemode';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'housemode_id' => Yii::t('app', 'Housemode ID'),
            'name' => Yii::t('app', 'Name'),
        ];
    }
}
