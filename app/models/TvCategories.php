<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tv_categories".
 *
 * @property integer $RecID
 * @property string $CategoryName
 * @property string $BackColor
 * @property string $ForeColor
 * @property resource $BLOBpreview
 * @property string $EXTpreview
 * @property string $CreationDate
 * @property string $ModificationDate
 * @property integer $FK_Users
 * @property integer $IsUpdated
 */
class TvCategories extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tv_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CategoryName', 'BackColor', 'ForeColor', 'BLOBpreview', 'EXTpreview', 'CreationDate', 'ModificationDate', 'FK_Users', 'IsUpdated'], 'required'],
            [['BLOBpreview'], 'string'],
            [['FK_Users'], 'integer'],
            [['IsUpdated'], 'boolean'],
            [['CategoryName'], 'string', 'max' => 50],
            [['BackColor', 'ForeColor'], 'string', 'max' => 15],
            [['EXTpreview'], 'string', 'max' => 5],
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
            'CategoryName' => Yii::t('app', 'Category Name'),
            'BackColor' => Yii::t('app', 'Back Color'),
            'ForeColor' => Yii::t('app', 'Fore Color'),
            'BLOBpreview' => Yii::t('app', 'Blobpreview'),
            'EXTpreview' => Yii::t('app', 'Extpreview'),
            'CreationDate' => Yii::t('app', 'Creation Date'),
            'ModificationDate' => Yii::t('app', 'Modification Date'),
            'FK_Users' => Yii::t('app', 'Fk  Users'),
            'IsUpdated' => Yii::t('app', 'Is Updated'),
        ];
    }
}
