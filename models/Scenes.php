<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "scenes".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $name
 * @property integer $log
 * @property string $firstrun
 * @property string $lastrun
 * @property string $comments
 * @property integer $category
 * @property integer $location_id
 * @property integer $event_id
 */
class Scenes extends \app\components\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'scenes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['enabled', 'log'], 'boolean'],
            [['firstrun', 'lastrun'], 'safe'],
            [['comments'], 'string'],
            [['category', 'location_id', 'event_id'], 'integer'],
            [['name'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'enabled' => Yii::t('app', 'Enabled'),
            'name' => Yii::t('app', 'Name'),
            'log' => Yii::t('app', 'Log'),
            'firstrun' => Yii::t('app', 'Firstrun'),
            'lastrun' => Yii::t('app', 'Lastrun'),
            'comments' => Yii::t('app', 'Comments'),
            'category' => Yii::t('app', 'Category'),
            'location_id' => Yii::t('app', 'Location ID'),
            'event_id' => Yii::t('app', 'Event ID'),
        ];
    }
}
