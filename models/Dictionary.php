<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dictionary".
 *
 * @property integer $RecID
 * @property string $US
 * @property string $NL
 * @property string $DE
 * @property string $FR
 * @property string $CreationDate
 * @property string $ModificationDate
 * @property integer $FK_Users
 */
class Dictionary extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dictionary';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['US', 'NL', 'DE', 'FR', 'CreationDate', 'ModificationDate', 'FK_Users'], 'required'],
            [['FK_Users'], 'integer'],
            [['US', 'NL', 'DE', 'FR'], 'string', 'max' => 500],
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
            'US' => Yii::t('app', 'Us'),
            'NL' => Yii::t('app', 'Nl'),
            'DE' => Yii::t('app', 'De'),
            'FR' => Yii::t('app', 'Fr'),
            'CreationDate' => Yii::t('app', 'Creation Date'),
            'ModificationDate' => Yii::t('app', 'Modification Date'),
            'FK_Users' => Yii::t('app', 'Fk  Users'),
        ];
    }
}
