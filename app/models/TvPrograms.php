<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tv_programs".
 *
 * @property string $ChannelID
 * @property string $StartPoint
 * @property string $EndPoint
 * @property string $ProgramName
 * @property string $ProgramDescription
 * @property string $CategoryName
 * @property string $SubCategoryName
 * @property string $CreationDate
 * @property integer $FK_Users
 */
class TvPrograms extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tv_programs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ChannelID', 'StartPoint', 'EndPoint', 'ProgramName', 'ProgramDescription', 'CategoryName', 'SubCategoryName', 'CreationDate', 'FK_Users'], 'required'],
            [['FK_Users'], 'integer'],
            [['ChannelID'], 'string', 'max' => 25],
            [['StartPoint', 'EndPoint', 'CreationDate'], 'string', 'max' => 12],
            [['ProgramName'], 'string', 'max' => 150],
            [['ProgramDescription'], 'string', 'max' => 1000],
            [['CategoryName', 'SubCategoryName'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ChannelID' => Yii::t('app', 'Channel ID'),
            'StartPoint' => Yii::t('app', 'Start Point'),
            'EndPoint' => Yii::t('app', 'End Point'),
            'ProgramName' => Yii::t('app', 'Program Name'),
            'ProgramDescription' => Yii::t('app', 'Program Description'),
            'CategoryName' => Yii::t('app', 'Category Name'),
            'SubCategoryName' => Yii::t('app', 'Sub Category Name'),
            'CreationDate' => Yii::t('app', 'Creation Date'),
            'FK_Users' => Yii::t('app', 'Fk  Users'),
        ];
    }
}
