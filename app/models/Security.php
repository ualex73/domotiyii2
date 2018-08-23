<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "security".
 *
 * @property integer $id
 * @property integer $ready
 * @property integer $armed
 * @property integer $trouble
 * @property string $lcd_line1
 * @property string $lcd_line2
 */
class Security extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'security';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['ready', 'armed', 'trouble'], 'boolean'],
            [['lcd_line1', 'lcd_line2'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'ready' => Yii::t('app', 'Ready'),
            'armed' => Yii::t('app', 'Armed'),
            'trouble' => Yii::t('app', 'Trouble'),
            'lcd_line1' => Yii::t('app', 'Lcd Line1'),
            'lcd_line2' => Yii::t('app', 'Lcd Line2'),
        ];
    }
}
