<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "newsfeeds".
 *
 * @property integer $id
 * @property string $name
 * @property string $url
 * @property string $description
 * @property integer $enabled
 */
class Newsfeeds extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'newsfeeds';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['enabled'], 'boolean'],
            [['name'], 'string', 'max' => 32],
            [['url'], 'string', 'max' => 254],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'url' => Yii::t('app', 'Url'),
            'description' => Yii::t('app', 'Description'),
            'enabled' => Yii::t('app', 'Enabled'),
        ];
    }
}
