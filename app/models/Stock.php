<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stock".
 *
 * @property integer $ean
 * @property string $name
 * @property integer $quantity
 * @property integer $category
 * @property integer $stockid
 * @property integer $target
 * @property double $price
 */
class Stock extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stock';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ean', 'quantity', 'category', 'target'], 'integer'],
            [['price'], 'number'],
            [['name'], 'string', 'max' => 100],
            [['ean'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ean' => Yii::t('app', 'Ean'),
            'name' => Yii::t('app', 'Name'),
            'quantity' => Yii::t('app', 'Quantity'),
            'category' => Yii::t('app', 'Category'),
            'stockid' => Yii::t('app', 'Stockid'),
            'target' => Yii::t('app', 'Target'),
            'price' => Yii::t('app', 'Price'),
        ];
    }
}
