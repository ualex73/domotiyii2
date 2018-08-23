<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "version".
 *
 * @property integer $id
 * @property string $db
 */
class Version extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'version';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['db'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'db' => Yii::t('app', 'Db'),
        ];
    }
}
