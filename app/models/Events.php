<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * This is the model class for table "events".
 *
 * @property integer $id
 * @property integer $enabled
 * @property string $name
 * @property integer $log
 * @property string $firstrun
 * @property string $lastrun
 * @property string $comments
 * @property integer $trigger_id
 * @property integer $condition1_id
 * @property string $operand
 * @property integer $condition2_id
 * @property integer $rerunenabled
 * @property integer $rerunvalue
 * @property string $reruntype
 * @property integer $category_id
 */
class Events extends \app\components\ActiveRecord
{

    /**
     * @return dropdownlist with the list of triggers
     */
    public function getAllTriggers()
    {
        return ArrayHelper::map(Triggers::find()->orderBy('name')->all(), 'id', 'name');
    }

    /**
     * @return dropdownlist with the list of conditions
     */
    public function getAllConditions()
    {
        return ArrayHelper::map(Conditions::find()->orderBy('name')->all(), 'id', 'name');
    }

    /**
     * @return dropdownlist with the list of actions
     */
    public function getAllActions()
    {
        return ArrayHelper::map(Actions::find()->orderBy('name')->all(), 'id', 'name');
    }

    /**
     * @return dropdownlist with the list of categories
     */
    public function getAllCategories()
    {
        return ArrayHelper::map(Category::find()->orderBy('name')->all(), 'id', 'name');
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['enabled', 'log', 'rerunenabled'], 'boolean'],
            [['firstrun', 'lastrun'], 'safe'],
            [['comments'], 'string'],
            [['name','trigger_id'],'required'],
            [['trigger_id', 'condition1_id', 'condition2_id', 'rerunvalue', 'category_id'], 'integer'],
            [['name'], 'string', 'max' => 64],
            [['operand', 'reruntype'], 'string', 'max' => 16],
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
            'trigger_id' => Yii::t('app', 'Trigger'),
            'condition1_id' => Yii::t('app', 'Condition1 ID'),
            'operand' => Yii::t('app', 'Operand'),
            'condition2_id' => Yii::t('app', 'Condition2 ID'),
            'rerunenabled' => Yii::t('app', 'Don\'t rerun event if it already ran in last:'),
            'rerunvalue' => Yii::t('app', ''),
            'reruntype' => Yii::t('app', ''),
            'category_id' => Yii::t('app', 'Category'),
        ];
    }

    public function getTrigger()
    {
        return $this->hasOne(Triggers::className(), ['id' => 'trigger_id']);
    }

}
