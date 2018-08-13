<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "notify".
 *
 * @property integer $id
 * @property string $keyword
 * @property integer $type
 */
class Notify extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notify';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'integer'],
            [['keyword'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'keyword' => Yii::t('app', 'Keyword'),
            'type' => Yii::t('app', 'Type'),
        ];
    }
}
