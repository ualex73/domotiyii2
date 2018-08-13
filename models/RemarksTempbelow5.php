<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "remarks_tempbelow5".
 *
 * @property integer $id
 * @property string $text
 */
class RemarksTempbelow5 extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'remarks_tempbelow5';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'text' => Yii::t('app', 'Text'),
        ];
    }
}
