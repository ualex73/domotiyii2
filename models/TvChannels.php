<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tv_channels".
 *
 * @property integer $RecID
 * @property string $ChannelName
 * @property string $ChannelID
 * @property resource $BLOBlogo
 * @property string $EXTlogo
 * @property string $CreationDate
 * @property string $ModificationDate
 * @property integer $FK_Users
 * @property integer $IsUpdated
 * @property integer $IsUsed
 * @property string $ChannelOrder
 */
class TvChannels extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tv_channels';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ChannelName', 'ChannelID', 'BLOBlogo', 'EXTlogo', 'CreationDate', 'ModificationDate', 'FK_Users', 'IsUpdated', 'IsUsed', 'ChannelOrder'], 'required'],
            [['BLOBlogo'], 'string'],
            [['FK_Users', 'IsUsed'], 'integer'],
            [['IsUpdated'], 'boolean'],
            [['ChannelName'], 'string', 'max' => 50],
            [['ChannelID'], 'string', 'max' => 25],
            [['EXTlogo'], 'string', 'max' => 5],
            [['CreationDate', 'ModificationDate'], 'string', 'max' => 12],
            [['ChannelOrder'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'RecID' => Yii::t('app', 'Rec ID'),
            'ChannelName' => Yii::t('app', 'Channel Name'),
            'ChannelID' => Yii::t('app', 'Channel ID'),
            'BLOBlogo' => Yii::t('app', 'Bloblogo'),
            'EXTlogo' => Yii::t('app', 'Extlogo'),
            'CreationDate' => Yii::t('app', 'Creation Date'),
            'ModificationDate' => Yii::t('app', 'Modification Date'),
            'FK_Users' => Yii::t('app', 'Fk  Users'),
            'IsUpdated' => Yii::t('app', 'Is Updated'),
            'IsUsed' => Yii::t('app', 'Is Used'),
            'ChannelOrder' => Yii::t('app', 'Channel Order'),
        ];
    }
}
