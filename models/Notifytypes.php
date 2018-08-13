<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "notifytypes".
 *
 * @property integer $type
 * @property string $name
 */
class Notifytypes extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notifytypes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'type' => Yii::t('app', 'Type'),
            'name' => Yii::t('app', 'Name'),
        ];
    }
}
