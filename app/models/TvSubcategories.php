<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tv_subcategories".
 *
 * @property integer $RecID
 * @property string $CategoryID
 * @property string $SubCategoryName
 * @property string $CreationDate
 * @property string $ModificationDate
 * @property integer $FK_Users
 * @property integer $IsUpdated
 */
class TvSubcategories extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tv_subcategories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CategoryID', 'SubCategoryName', 'CreationDate', 'ModificationDate', 'FK_Users', 'IsUpdated'], 'required'],
            [['FK_Users'], 'integer'],
            [['IsUpdated'], 'boolean'],
            [['CategoryID', 'SubCategoryName'], 'string', 'max' => 50],
            [['CreationDate', 'ModificationDate'], 'string', 'max' => 12],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'RecID' => Yii::t('app', 'Rec ID'),
            'CategoryID' => Yii::t('app', 'Category ID'),
            'SubCategoryName' => Yii::t('app', 'Sub Category Name'),
            'CreationDate' => Yii::t('app', 'Creation Date'),
            'ModificationDate' => Yii::t('app', 'Modification Date'),
            'FK_Users' => Yii::t('app', 'Fk  Users'),
            'IsUpdated' => Yii::t('app', 'Is Updated'),
        ];
    }
}
