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
            [['name','location_id','event_id'],'required'],
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
            'location_id' => Yii::t('app', 'Location'),
            'event_id' => Yii::t('app', 'Event'),
        ];
    }
    public function getEvents()
    {
        return $this->hasOne(Events::className(),['id'=>'event']);
    }

    /**
     * @return dropdownlist with the list of locations
     */
    public function getLocations()
    {
        return $this->hasOne(Locations::className(),['id'=>'location']);
    }

    /**
     * @return dropdownlist with the list of scenes
     */
    public function getCategories()
    {
        return $this->hasOne(Category::className(),['id'=>'categories']);
    }



}
